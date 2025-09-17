<?php
class UserController
{
    protected $model;

    public function __construct(UserModel $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        $users = $this->model->all();
        include __DIR__ . '/../views/user_list.php';
    }

    public function show($id)
    {
        $user = $this->model->find($id);
        include __DIR__ . '/../views/user_detail.php';
    }
}
