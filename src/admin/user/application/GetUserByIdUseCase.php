<?php

namespace Src\admin\user\application;

use Src\admin\user\domain\contracts\UserRepositoryInterface;
use Src\admin\user\domain\entities\User;

class GetUserByIdUseCase
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    // Usar en todo el proyecto o bien execute o ___invoke
    // Ejemplo con ___invoke
    public function ___invoke(int $id): ?User
    {
        return $this->userRepository->findById($id);
    }
}
