<?php

namespace App\Services;
use App\Repositories\CategoryRepository;
class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->categoryRepository->all()->load('parent');
    }
    public function getAllCategoriesWithHierarchy()
    {
        return $this->categoryRepository->all()->whereNull('parent_id')->load('children');
    }

    public function getCategoryById($id)
    {
        return $this->categoryRepository->find($id);
    }

    public function createCategory(array $data)
    {
        return $this->categoryRepository->create($data);
    }

    public function updateCategory($id, array $data)
    {
        return $this->categoryRepository->update($id, $data);
    }

    public function deleteCategory($id)
    {
         $this->categoryRepository->delete($id);
    }
}
