<?php
class AuthService {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    // Função de login
    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return null;
    }

    // Função de recuperação de senha
    public function resetPassword($user_id, $new_password) {
        $this->userModel->updatePassword($user_id, $new_password);
    }
}
?>