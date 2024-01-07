<?php

namespace App\Http\Controllers;
use App\Http\Requests\MemberRequest;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $data = Member::get();
        return view('member.index', compact('data'));
    }

    public function create()
    {
        return view('member.create');
    }

    public function store(MemberRequest $request)
    {
        $data = $request->validated();
        Member::create($data);
        return redirect()->route('member');
    }

    public function show(string $id)
    {
        // You can implement this method if needed.
    }

    public function edit(string $id)
    {
        $data = Member::findOrFail($id);
        return view('member.edit', compact('data'));
    }

    public function update(MemberRequest $request, string $id)
    {
        $data = $request->validated();
        Member::findOrFail($id)->update($data);
        return redirect()->route('member');
    }

    public function destroy(string $id)
    {
        $data = Member::find($id);
        $data->delete();
        return redirect()->route('member');
    }
    
}
