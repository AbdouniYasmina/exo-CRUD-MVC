<?php

    require_once "managers/UserManager.php";
    
    class UserManager extends AbstractManager
    {

        public function __construct(){
            parent::__construct();
            
            
        }
        
        
        public function findAll(): array 
        {
            
            
            $query = $db->prepare('SELECT * FROM users');
            
            $query->execute();
            
            $users = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $userAll =[];
            
            foreach($users as $user){
                $userAll[]=new User(
                    
                    $user['email'],
                    $user['first_name'],
                    $user['last_name']
                    );
            }
            
            return $userAll;
        }
        
        
        public function findOne(int $id){
            $query = $this->db->prepare('SELECT * FROM users Where id = :id');
            
            $parameters = [
                'id' => $id
            ];
            
            $query->execute($parameters);
            
            $user = $query->fetch(PDO::FETCH_ASSOC);
            
            $userOne = new User(
                $user['email'],
                $user['first_name'],
                $user['last_name']
                );
            $userOne->id = $user['id'];
            
            return $userOne;
            
        }
        
        
        public function create(User $user) : void
        {
            $query = $this->db->prepare("
            INSERT INTO users (email, first_name, last_name)
            VALUES (:email, :first_name, :last_name)");
            $parameters = [
                'email' => $GET['email'],
                'first_name' => $GET ['first_name'],
                'last_name' => $GET ['last-name'],
                ];
            $query->execute($parameters);
        }
        
        
        public function update(User $user): void
        {
            $query = $this->db->prepare("
                UPDATE users
                SET email = :email, :first_name = :first_name, last_name = :last_name
                WHERE id = :id
            ");
            $parameters = [
                'email' => $GET['email'],
                'first_name' => $GET ['first_name'],
                'last_name' => $GET ['last-name'],
                ];
            $query->execute($parameters);
        }
        
        
        public function delete(User $user): void {
            $result = $this->db->prepare("DELETE FROM users WHERE id = :id");
            $result->execute([':id'=> $user->getId()]);
        }
    }
