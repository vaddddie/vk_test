<?php
	class UserController {
    		public function registerUser($userData) {
        	// Регистрация нового пользователя
    		}

    		public function loginUser($userData) {
        	// Вход пользователя
    		}
	}

	class ProductController {
		public function createNewProduct($productData) {
        	// Создать новую карточку товара
    		}

    		public function getProductById($productId) {
        	// Получить информацию о товаре по id
    		}

		public function setProductData($productId, $productData) {
        	// Изменить информацию о товаре
    		}

		public function deleteProductById($productId) {
        	// Удалить карточку товара
    		}
	}

	class GroupController {
		public function createNewGroup($groupData) {
        	// Создать новую группу
    		}

    		public function getGroupById($groupId) {
        	// Получить информацию о группе по id
    		}

		public function setGroupData($groupId, $groupData) {
        	// Изменить информацию о группе
    		}

		public function deleteGroupById($groupId) {
        	// Удалить группу
    		}
	}

	class CategoryController {
		public function createNewCategory($categoryData) {
        	// Создать новую категорию
    		}

    		public function getCategoryById($categoryId) {
        	// Получить информацию о категории по id
    		}

		public function setCategoryData($categoryId, $categoryData) {
        	// Изменить информацию о категории
    		}

		public function deleteCategoryById($categoryId) {
        	// Удалить категорию
    		}
	}

	class SubcategoryController {
		public function createNewSubcategory($subcategoryData) {
        	// Создать новую подкатегорию
    		}

    		public function getSubcategoryById($subcategoryId) {
        	// Получить информацию о подкатегории по id
    		}

		public function setSubcategoryData($subcategoryId, $subcategoryData) {
        	// Изменить информацию о подкатегории
    		}

		public function deleteSubcategoryById($subcategoryId) {
        	// Удалить подкатегорию
    		}
	}

	class CityController {
		public function createNewCity($cityData) {
        	// Создать новый город
    		}

    		public function getCityById($cityId) {
        	// Получить информацию о городе по id
    		}

		public function setCityData($cityId, $cityData) {
        	// Изменить информацию о городе
    		}

		public function deleteCityById($cityId) {
        	// Удалить город
    		}
	}

	class DeliveryController {
		public function arrangeDelivery($deliveryAddress, $productsData) {
		// Оформить доставку
		}
	}

	class OrderController {
    		public function placeOrder($userId, $basketData, $deliveryAddress) {
        	// Оформить заказ
    		}
	}
?>