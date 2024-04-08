<?php
namespace App\Http\Controllers;

use App\Repositories\UsuarioRepository;
use App\Repositories\UsuarioRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiUsuarioController extends Controller
{
    public function __construct(protected UsuarioRepositoryInterface $service)
    {

    }

    public function getOne(Request $request): JsonResponse
    {

    }

    public function getAll(): JsonResponse
    {
        return response()->Json('teste');
    }

    public function update(Request $request): JsonResponse
    {

    }

    public function create(Request $request): JsonResponse
    {

    }

    public function delete(Request $request): JsonResponse
    {

    }
}
