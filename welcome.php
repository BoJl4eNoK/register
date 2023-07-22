<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop card</title>
    <link rel="stylesheet" href="libs/modal/modal.css">
    <link rel="stylesheet" href="css/shop.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="header__nav nav">
                <ul class="nav__list">
                    <li class="nav__item"><a href="" class="nav__link">Каталог</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Акции</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Оплата и доставка</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Работа в компании</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Контакты</a></li>
                </ul>
                <div class="header__cart cart" tabindex="0">
                    <div class="cart__text">
                        Корзина
                        <span class="cart__quantity">0</span>
                    </div>
                    <div class="cart-content">
                        <ul class="cart-content__list" data-simplebar>
                        </ul>
                        <div class="cart-content__bottom">
                            <div class="cart-content__fullprice">
                                <span>Итого:</span>
                                <span class="fullprice">568 789 ₽</span>
                            </div>
                            <button class="cart-content__btn btn" data-graph-path="modal" data-graph-animation="fadeInUp">Перейти в корзину</button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="content">
        <div class="container">
            <div class="products-content grid-container">
                <div class="filters">
                    <div class="filters__item filters-price">
                        <h3 class="filters-price__title">Цена</h3>
                        <div class="filters-price__slider"></div>
                        <div class="filters-price__inputs">
                            <input type="text" class="filters-price__input">
                            <input type="text" class="filters-price__input">
                        </div>
                    </div>
                </div>
                <ul class="products-grid">
                    <li class="products-grid__item">
                        <article class="product">
                            <a href="#" class="product__image">
                                <div class="product__switch image-switch">
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-2.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-3.jpg" alt="Макбук"></div>
                                    </div>
                                </div>
                                <ul class="product__image-pagination image-pagination" aria-hidden="true"></ul>
                            </a>
                            <h3 class="product__title">
                                <a href="#">Ноутбук Apple MacBook Pro 16 TB i7 2.6/16/512 SSD SG MVVJ2RU/A</a>
                            </h3>
                            <div class="product__props">
                                <span class="product__rating">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.04894 0.92705C7.3483 0.00573924 8.6517 0.00573965 8.95106 0.92705L10.0206 4.21885C10.1545 4.63087 10.5385 4.90983 10.9717 4.90983H14.4329C15.4016 4.90983 15.8044 6.14945 15.0207 6.71885L12.2205 8.75329C11.87 9.00793 11.7234 9.4593 11.8572 9.87132L12.9268 13.1631C13.2261 14.0844 12.1717 14.8506 11.388 14.2812L8.58779 12.2467C8.2373 11.9921 7.7627 11.9921 7.41221 12.2467L4.61204 14.2812C3.82833 14.8506 2.77385 14.0844 3.0732 13.1631L4.14277 9.87132C4.27665 9.4593 4.12999 9.00793 3.7795 8.75329L0.979333 6.71885C0.195619 6.14945 0.598395 4.90983 1.56712 4.90983H5.02832C5.46154 4.90983 5.8455 4.63087 5.97937 4.21885L7.04894 0.92705Z" />
                                    </svg>
                                    4,5
                                </span>
                                <span class="product__testimonials">83 отзыва</span>
                            </div>
                            <div class="product__info">
                                <span class="product__term">Артикул: 879876</span>
                                <span class="product__available">В наличии: 13 шт</span>
                            </div>
                            <div class="product__price product-price">
                                <span class="product-price__current">190 789 ₽</span>
                                <span class="product-price__old">194 578 ₽</span>
                            </div>
                            <button class="product__btn btn">Добавить в корзину</button>
                        </article>
                    </li>
                    <li class="products-grid__item">
                        <article class="product">
                            <a href="#" class="product__image">
                                <div class="product__switch image-switch">
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-2.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-3.jpg" alt="Макбук"></div>
                                    </div>
                                </div>
                                <ul class="product__image-pagination image-pagination" aria-hidden="true"></ul>
                            </a>
                            <h3 class="product__title">
                                <a href="#">Ноутбук Apple MacBook Pro 16 TB i7 2.6/16/512 SSD SG MVVJ2RU/A</a>
                            </h3>
                            <div class="product__props">
                                <span class="product__rating">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.04894 0.92705C7.3483 0.00573924 8.6517 0.00573965 8.95106 0.92705L10.0206 4.21885C10.1545 4.63087 10.5385 4.90983 10.9717 4.90983H14.4329C15.4016 4.90983 15.8044 6.14945 15.0207 6.71885L12.2205 8.75329C11.87 9.00793 11.7234 9.4593 11.8572 9.87132L12.9268 13.1631C13.2261 14.0844 12.1717 14.8506 11.388 14.2812L8.58779 12.2467C8.2373 11.9921 7.7627 11.9921 7.41221 12.2467L4.61204 14.2812C3.82833 14.8506 2.77385 14.0844 3.0732 13.1631L4.14277 9.87132C4.27665 9.4593 4.12999 9.00793 3.7795 8.75329L0.979333 6.71885C0.195619 6.14945 0.598395 4.90983 1.56712 4.90983H5.02832C5.46154 4.90983 5.8455 4.63087 5.97937 4.21885L7.04894 0.92705Z" />
                                    </svg>
                                    4,5
                                </span>
                                <span class="product__testimonials">83 отзыва</span>
                            </div>
                            <div class="product__info">
                                <span class="product__term">Артикул: 879876</span>
                                <span class="product__available">В наличии: 13 шт</span>
                            </div>
                            <div class="product__price product-price">
                                <span class="product-price__current">190 789 ₽</span>
                                <span class="product-price__old">194 578 ₽</span>
                            </div>
                            <button class="product__btn btn">Добавить в корзину</button>
                        </article>
                    </li>
                    <li class="products-grid__item">
                        <article class="product">
                            <a href="#" class="product__image">
                                <div class="product__switch image-switch">
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-2.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-3.jpg" alt="Макбук"></div>
                                    </div>
                                </div>
                                <ul class="product__image-pagination image-pagination" aria-hidden="true"></ul>
                            </a>
                            <h3 class="product__title">
                                <a href="#">Ноутбук Apple MacBook Pro 16 TB i7 2.6/16/512 SSD SG MVVJ2RU/A</a>
                            </h3>
                            <div class="product__props">
                                <span class="product__rating">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.04894 0.92705C7.3483 0.00573924 8.6517 0.00573965 8.95106 0.92705L10.0206 4.21885C10.1545 4.63087 10.5385 4.90983 10.9717 4.90983H14.4329C15.4016 4.90983 15.8044 6.14945 15.0207 6.71885L12.2205 8.75329C11.87 9.00793 11.7234 9.4593 11.8572 9.87132L12.9268 13.1631C13.2261 14.0844 12.1717 14.8506 11.388 14.2812L8.58779 12.2467C8.2373 11.9921 7.7627 11.9921 7.41221 12.2467L4.61204 14.2812C3.82833 14.8506 2.77385 14.0844 3.0732 13.1631L4.14277 9.87132C4.27665 9.4593 4.12999 9.00793 3.7795 8.75329L0.979333 6.71885C0.195619 6.14945 0.598395 4.90983 1.56712 4.90983H5.02832C5.46154 4.90983 5.8455 4.63087 5.97937 4.21885L7.04894 0.92705Z" />
                                    </svg>
                                    4,5
                                </span>
                                <span class="product__testimonials">83 отзыва</span>
                            </div>
                            <div class="product__info">
                                <span class="product__term">Артикул: 879876</span>
                                <span class="product__available">В наличии: 13 шт</span>
                            </div>
                            <div class="product__price product-price">
                                <span class="product-price__current">190 789 ₽</span>
                                <span class="product-price__old">194 578 ₽</span>
                            </div>
                            <button class="product__btn btn">Добавить в корзину</button>
                        </article>
                    </li>
                    <li class="products-grid__item">
                        <article class="product">
                            <a href="#" class="product__image">
                                <div class="product__switch image-switch">
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-2.jpg" alt="Макбук"></div>
                                    </div>
                                    <div class="image-switch__item">
                                        <div class="image-switch__img"><img src="img/macbook-3.jpg" alt="Макбук"></div>
                                    </div>
                                </div>
                                <ul class="product__image-pagination image-pagination" aria-hidden="true"></ul>
                            </a>
                            <h3 class="product__title">
                                <a href="#">Ноутбук Apple MacBook Pro 16 TB i7 2.6/16/512 SSD SG MVVJ2RU/A</a>
                            </h3>
                            <div class="product__props">
                                <span class="product__rating">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.04894 0.92705C7.3483 0.00573924 8.6517 0.00573965 8.95106 0.92705L10.0206 4.21885C10.1545 4.63087 10.5385 4.90983 10.9717 4.90983H14.4329C15.4016 4.90983 15.8044 6.14945 15.0207 6.71885L12.2205 8.75329C11.87 9.00793 11.7234 9.4593 11.8572 9.87132L12.9268 13.1631C13.2261 14.0844 12.1717 14.8506 11.388 14.2812L8.58779 12.2467C8.2373 11.9921 7.7627 11.9921 7.41221 12.2467L4.61204 14.2812C3.82833 14.8506 2.77385 14.0844 3.0732 13.1631L4.14277 9.87132C4.27665 9.4593 4.12999 9.00793 3.7795 8.75329L0.979333 6.71885C0.195619 6.14945 0.598395 4.90983 1.56712 4.90983H5.02832C5.46154 4.90983 5.8455 4.63087 5.97937 4.21885L7.04894 0.92705Z" />
                                    </svg>
                                    4,5
                                </span>
                                <span class="product__testimonials">83 отзыва</span>
                            </div>
                            <div class="product__info">
                                <span class="product__term">Артикул: 879876</span>
                                <span class="product__available">В наличии: 13 шт</span>
                            </div>
                            <div class="product__price product-price">
                                <span class="product-price__current">190 789 ₽</span>
                                <span class="product-price__old">194 578 ₽</span>
                            </div>
                            <button class="product__btn btn">Добавить в корзину</button>
                        </article>
                    </li>
                </ul>
            </div>
            <div class="height"></div>
        </div>
    </main>
    <div class="modal">
        <div class="modal__container order-modal" role="dialog" aria-modal="true" data-graph-target="modal">
            <div class="modal-content order-modal__content">
                <div class="order-modal__top">
                    <h2 class="order-modal__title">Оформление заказа</h2>
                    <span class="order-modal__number">Заказ № 3456 67</span>
                </div>
                <div class="order-modal__info">
                    <div class="order-modal__quantity order-modal__info-item">Товаров в заказе: <span>3 шт</span></div>
                    <div class="order-modal__summ order-modal__info-item">Общая сумма заказа: <span>568 789 ₽</span></div>
                    <div class="order-modal__products order-modal__info-item">
                        <button class="order-modal__btn">Состав заказа</button>
                        <ul class="order-modal__list">
                            <!-- <li class="order-modal__item">
                                <article class="order-modal__product order-product">
                                    <img src="img/macbook.jpg" alt="" class="order-product__img">
                                    <div class="order-product__text">
                                        <h3 class="order-product__title">Ноутбук Apple MacBook Pro 16 TB i7 2.6/16/512 SSD SG MVVJ2RU/A</h3>
                                        <span class="order-product__price">190 789 ₽ </span>
                                    </div>
                                    <button class="order-product__delete">Удалить</button>
                                </article>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <form action="#" class="order-modal__form order">
                    <input type="hidden" name="theme" value="Обратный звонок">
                    <input type="hidden" name="admin_email[]" value="maxgraph23@gmail.com">
                    <input type="hidden" name="form_subject" value="Заявка с сайта Сайт">
                    <label class="order__label">
                        <span class="order__text">Ваше имя</span>
                        <input type="text" name="Имя" class="order__input">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Номер телефона</span>
                        <input type="tel" name="Телефон" class="order__input" placeholder="+7 (___)___-__-__">
                    </label>
                    <label class="order__label">
                        <span class="order__text">Ваше имя</span>
                        <input type="email" name="Email" class="order__input" placeholder="post@gmail.com">
                    </label>
                    <button class="order__btn btn">Оформить заказ</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/simplebar.js"></script>
    <script src="libs/modal/modal.js"></script>
    <script src="js/product.js"></script>
    <script src="js/fixed-block.js"></script>
    <script src="js/cart.js"></script>
</body>
</html>