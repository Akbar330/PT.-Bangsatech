<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class TestimonialController extends Controller
{
    public function index(): View
    {
        return view('admin.testimonials.index', [
            'testimonials' => Testimonial::ordered()->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.testimonials.form', [
            'testimonial' => new Testimonial(['is_active' => true, 'sort_order' => Testimonial::max('sort_order') + 1]),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Testimonial::create($this->payload($request));

        return redirect()->route('admin.testimonials.index')->with('status', 'Testimoni berhasil ditambahkan.');
    }

    public function edit(Testimonial $testimonial): View
    {
        return view('admin.testimonials.form', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $payload = $this->payload($request, $testimonial);

        if ($request->boolean('remove_avatar') && $testimonial->avatar) {
            Storage::disk('public')->delete($testimonial->avatar);
            $payload['avatar'] = null;
        }

        $testimonial->update($payload);

        return redirect()->route('admin.testimonials.index')->with('status', 'Testimoni berhasil diperbarui.');
    }

    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        if ($testimonial->avatar) {
            Storage::disk('public')->delete($testimonial->avatar);
        }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('status', 'Testimoni berhasil dihapus.');
    }

    private function payload(Request $request, ?Testimonial $testimonial = null): array
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'person_name' => ['required', 'string', 'max:255'],
            'institution' => ['nullable', 'string', 'max:255'],
            'avatar' => ['nullable', 'image', 'max:2048'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['nullable', 'boolean'],
            'remove_avatar' => ['nullable', 'boolean'],
        ]);

        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('avatar')) {
            if ($testimonial?->avatar) {
                Storage::disk('public')->delete($testimonial->avatar);
            }

            $data['avatar'] = $request->file('avatar')->store('testimonials', 'public');
        } else {
            unset($data['avatar']);
        }

        unset($data['remove_avatar']);

        return $data;
    }
}
