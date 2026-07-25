<?php

namespace App\Http\Controllers;

use App\Http\Requests\Program\StoreProgramRequest;
use App\Models\Program;
use App\Models\Specialty;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::withCount('specialties')->latest()->paginate(7);
        return view('admin.programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.programs.create');
    }

    public function show(Program $program)
    {
        $program = Program::with('specialties')->findOrFail($program->id);
        return view('admin.programs.show', compact('program'));
    }

    public function store(StoreProgramRequest $request)
    {
        Program::create($request->validated());
        return redirect()
            ->route('programs.index')
            ->with('success', 'Filière créée avec succès.');
    }
}
