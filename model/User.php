<?php

/**
 * summary
 */
class User
{
    /**
     * summary
     */

    private int $id ;
	private  string $user ;
	private string $password ;
	private string $email ;

    public function __construct()
    {
        $this->props = props;
    }
    public function __construct($user, $password){
		$this->$user = $user ;
		$this->$password = $password ;
	}


	public function getId($id){
		return $user ;
	}
	public function getId($id){
		return $password ;
	}

	public function getUser($user){
		return $user ;
	}
	public function getPassword($password){
		return $password ;
	}

	public function settUser($user){
		return $user ;
	}
	public function setPassword($password){
		return $password ;
	}

	public function getEmail($email){
		return $user ;
	}
	public function getEmail($email){
		return $password ;
	}

	public function __toString(){
		return $user . $password ;
	}


}
	
 ?>