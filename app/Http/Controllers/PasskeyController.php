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
        //
    }

    public function show(Passkey $passkey): View
    {
        //
    }

    public function create(): View
    {
        //
    }

    public function store(StorePasskeyRequest $request): void
    {
        //
    }

    public function edit(Passkey $passkey): View
    {
        //
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
