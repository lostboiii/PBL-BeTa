<?php
class AuthController {
    private $user;
    
    public function __construct(User $user) {
        $this->user = $user;
    }
    
    public function login() {
        $nim = $_POST['nim'];
        $password = $_POST['password'];
        
        try {
            $user = $this->user->authenticate($nim, $password);
            
            if ($user) {
                $_SESSION['user'] = [
                    'nim' => $user['NIM'],
                    'username' => $user['USERNAME'],
                    'role' => $user['ROLE']
                ];
                
                return json_encode([
                    "status" => "success",
                    "message" => "Login successful!",
                    "role" => $user['ROLE']
                ]);
            }
            
            return json_encode([
                "status" => "error",
                "message" => "Invalid nim or password."
            ]);
            
        } catch (Exception $e) {
            return json_encode([
                "status" => "error",
                "message" => $e->getMessage()
            ]);
        }
    }
    
    public function logout() {
        session_destroy();
        header('Location: /login');
    }
}