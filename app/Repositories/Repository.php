<?php

namespace App\Repositories;

abstract class Repository
{

	public $model;

	public function __construct($model)
	{
		$this->model = $model;
	}

	public function find($id)
	{
		return $this->model->find($id);
	}

	public function findOrFail($id)
	{
		return $this->model->findOrFail($id);
	}

	public function findBySlug($slug)
	{
		return $this->model->findBySlug($slug);
	}

	public function latest()
	{
		return $this->model->latest();
	}

	public function published()
	{
		return $this->model->published();
	}

	public function rules($id = null)
	{
		return $this->model->rules($id);
	}

	public function create($data)
	{
		return $this->model->create($data);
	}

}