<?php

function getallusers()
{
    return json_decode(file_get_contents(__DIR__ . '/users.json'), true);
}

function getuser($id)
{
    $Users = getallusers();
    foreach ($Users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return null;
}

function updateUser($id, $Request)
{
    $Users = getallusers();
    foreach ($Users as $k => $user) {
        if ($user['id'] == $id) {
            $Users[$k] = array_merge($user, $Request);
        }
    }
    file_put_contents(__DIR__ . '/users.json', json_encode($Users));
}

function create($Request)
{
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $phone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
    $Users = getallusers();
    $lastuser = end($Users);
    $user_id = $lastuser['id'] + 1;
    $Request = ["id" => $user_id, "name" => $name, "address" => $address, "phone" => $phone, "gender" => $gender];
    $newuser = [array_push($Users, $Request)];
    file_put_contents(__DIR__ . '/users.json', json_encode($Users));
}

function destroy($id)
{

    $Users = getallusers();
    foreach ($Users as $k => $user) {
        if ($user['id'] == $id) {
            unset($Users[$k]);
        }
    }

    file_put_contents(__DIR__ . '/users.json', json_encode($Users));
}
