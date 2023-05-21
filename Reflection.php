<?php
  require_once "data/LoginRequest.php";
  require_once "exception/ValidationException.php";
  require_once "helper/ValidationUtil.php";

  $request = new LoginRequest();
  $request->username = "eko";
  $request->password = "eko";

  ValidationUtil::validateReflection($request);

  class RegisterUserRequest
  {
    public ?string $name;
    public ?string $address;
    public ?string $email;
  }

  $register = new RegisterUserRequest();
  $register->name = "Eko";
  $register->address = "Subang";
  $register->email = "eko@gmail.com";

  ValidationUtil::validateReflection($register);
