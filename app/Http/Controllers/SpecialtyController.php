<?php

namespace App\Http\Controllers;

use App\Http\Requests\Specialty\StoreSpecialtyRequest;
use App\Models\Program;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index()
    {
        $specialties = Specialty::with('program')->latest()->paginate(7);
        return view('admin.specialties.index', compact('specialties'));
    }

    public function create()
    {
        $programs = Program::orderBy('name')->get();
        return view('admin.specialties.create', compact('programs'));
    }

    public function store(StoreSpecialtyRequest $request)
    {
        Specialty::create($request->validated());
        return redirect()->route('specialties.index')
            ->with('success', 'Spécialité créée avec succès.');;
    }

    public function show(Specialty $specialty)
    {
        $specialty->load('program', 'courses');
        return view('admin.specialties.show', compact('specialty'));
    }

    public function edit(Specialty $specialty)
    {
        $programs = Program::orderBy('name')->get();
        return view('admin.specialties.edit', compact('specialty', 'programs'));
    }
}
