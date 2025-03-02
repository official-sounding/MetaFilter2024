<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\Passkey\StorePasskeyRequest;
use App\Http\Requests\Passkey\UpdatePasskeyRequest;
use App\Models\Passkey;
use Illuminate\Contracts\View\View;

final class PasskeyController extends Controller
{
    public function index(): View
    {
        return view('passkey.index');
    }

    public function show(Passkey $passkey): View
    {
        return view('passkey.show', compact('passkey'));
    }

    public function create(): View
    {
        return view('passkey.create');
    }

    public function store(StorePasskeyRequest $request): void
    {
        //
    }

    public function edit(Passkey $passkey): View
    {
        return view('passkey.edit', compact('passkey'));
    }

    public function update(UpdatePasskeyRequest $request, Passkey $passkey): void
    {
        //
    }

    public function delete(Passkey $passkey): void
    {
        //
    }
}
