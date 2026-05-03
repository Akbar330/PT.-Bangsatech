<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        return view('admin.customers.index', [
            'customers' => Customer::ordered()->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.customers.form', [
            'customer' => new Customer(['is_active' => true, 'sort_order' => Customer::max('sort_order') + 1]),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Customer::create($this->payload($request));

        return redirect()->route('admin.customers.index')->with('status', 'Pelanggan berhasil ditambahkan.');
    }

    public function edit(Customer $customer): View
    {
        return view('admin.customers.form', compact('customer'));
    }

    public function update(Request $request, Customer $customer): RedirectResponse
    {
        $payload = $this->payload($request, $customer);

        if ($request->boolean('remove_logo') && $customer->logo) {
            Storage::disk('public')->delete($customer->logo);
            $payload['logo'] = null;
        }

        $customer->update($payload);

        return redirect()->route('admin.customers.index')->with('status', 'Pelanggan berhasil diperbarui.');
    }

    public function destroy(Customer $customer): RedirectResponse
    {
        if ($customer->logo) {
            Storage::disk('public')->delete($customer->logo);
        }

        $customer->delete();

        return redirect()->route('admin.customers.index')->with('status', 'Pelanggan berhasil dihapus.');
    }

    private function payload(Request $request, ?Customer $customer = null): array
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'remove_logo' => ['nullable', 'boolean'],
        ]);

        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('logo')) {
            if ($customer?->logo) {
                Storage::disk('public')->delete($customer->logo);
            }

            $data['logo'] = $request->file('logo')->store('customers', 'public');
        } else {
            unset($data['logo']);
        }

        unset($data['remove_logo']);

        return $data;
    }
}
