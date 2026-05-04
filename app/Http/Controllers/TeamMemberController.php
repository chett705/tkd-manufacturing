<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::latest()->get();
        return view('Backend.team-members.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('Backend.team-members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $data = $request->only(['name', 'position']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('team-members', 'public');
        }

        TeamMember::create($data);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member added successfully!');
    }

    public function edit(TeamMember $teamMember)
    {
        return view('Backend.team-members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $data = $request->only(['name', 'position']);

        if ($request->hasFile('image')) {
            if ($teamMember->image) {
                Storage::disk('public')->delete($teamMember->image);
            }

            $data['image'] = $request->file('image')->store('team-members', 'public');
        }

        $teamMember->update($data);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member updated successfully!');
    }

    public function destroy(TeamMember $teamMember)
    {
        if ($teamMember->image) {
            Storage::disk('public')->delete($teamMember->image);
        }

        $teamMember->delete();

        return redirect()->route('admin.team-members.index')
            ->with('success', 'Team member deleted successfully!');
    }
}
