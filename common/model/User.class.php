<?php
/**
 * User Model
 */
class User extends Model {
	
    protected static $tableName = TABLE_USERS;
    protected static $primaryKey = 'id';
    
    const PRIV_ADMINISTRATOR = 1;
    const PRIV_MODERATOR= 2;
    const PRIV_EDITOR= 3;
    const PRIV_MEMBER= 8;
    const PRIV_GUEST= 99;
    
    
    function setId($value){
        $this->setColumnValue('id', $value);
    }
    function getId(){
        return $this->getColumnValue('id');
    }
    
    function setUsername($value){
        $this->setColumnValue('username', $value);
    }
    function getUsername(){
        return $this->getColumnValue('username');
    }
    
    function setPassword($value){
        $this->setColumnValue('password', $value);
    }
    function getPassword(){
        return $this->getColumnValue('password');
    }
    
    function setEmail($value){
        $this->setColumnValue('email', $value);
    }
    function getEmail(){
        return $this->getColumnValue('email');
    }
    
    function setFullname($value){
        $this->setColumnValue('fullname', $value);
    }
    function getFullname(){
        return $this->getColumnValue('fullname');
    }
    
    function setPrivilege($value){
        $this->setColumnValue('privilege', $value);
    }
    function getPrivilege(){
        return $this->getColumnValue('privilege');
    }
}
