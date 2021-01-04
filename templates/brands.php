<?php
$brands = array(
    array('img' => 'lada', 'name' => "lada"),
    array('img' => 'kia', 'name' => "kia"),
    array('img' => 'renault', 'name' => "renault"),
    array('img' => 'hyundai', 'name' => "hyundai"),
    array('img' => 'nissan', 'name' => "nissan"),
    array('img' => 'toyota', 'name' => "toyota"),
    array('img' => 'volkswagen', 'name' => "volkswagen"),
    array('img' => 'chevrolet', 'name' => "chevrolet"),
    array('img' => 'skoda', 'name' => "skoda"),
    array('img' => 'mitsubihsi', 'name' => "mitsubihsi"),
    array('img' => 'газ', 'name' => "газ"),
    array('img' => 'ford', 'name' => "ford"),
    array('img' => 'opel', 'name' => "opel"),
    array('img' => 'mercedes', 'name' => "mercedes"),
    array('img' => 'mazda', 'name' => "mazda"),
    array('img' => 'уаз', 'name' => "уаз"),
    array('img' => 'daewoo', 'name' => "daewoo"),
    array('img' => 'bmw', 'name' => "bmw"),
    array('img' => 'audi', 'name' => "audi"),
    array('img' => 'ssang-yong', 'name' => "ssang yong"),
    array('img' => 'lifan', 'name' => "lifan"),
    array('img' => 'land-rover', 'name' => "land rover"),
    array('img' => 'peugeot', 'name' => "peugeot"),
    array('img' => 'honda', 'name' => "honda"),
    array('img' => 'citroen', 'name' => "citroen"),
    array('img' => 'volvo', 'name' => "volvo"),
    array('img' => 'acura', 'name' => "acura"),
    array('img' => 'cadilac', 'name' => "cadilac"),
    array('img' => 'chrysler', 'name' => "chrysler"),
    array('img' => 'dodge', 'name' => "dodge"),
    array('img' => 'haval', 'name' => "haval"),
    array('img' => 'infinity', 'name' => "infinity"),
    array('img' => 'jaguar', 'name' => "jaguar"),
    array('img' => 'jeep', 'name' => "jeep"),
    array('img' => 'lexus', 'name' => "lexus"),
    array('img' => 'lincoln', 'name' => "lincoln"),
    array('img' => 'mini-cooper', 'name' => "mini cooper"),
    array('img' => 'porsche', 'name' => "porsche"),
    array('img' => 'changan', 'name' => "changan"),
    array('img' => 'subaru', 'name' => "subaru"),
    array('img' => 'saab', 'name' => "saab"),
    array('img' => 'suzuki', 'name' => "suzuki"),
    array('img' => 'tesla', 'name' => "tesla"),
    array('img' => 'rover', 'name' => "rover"),
);
?>

<section class="section-wrapper brands">
    <div class="container">
        <div class="brands__header">
            <h2 class="h2 title">Стоимость катализаторов популярных марок авто</h2>
            <div class="brands__search">
                <span>Найдите свою марку </span>
                <label for="#brands-search">
                    <input type="text" id="brands-search" placeholder="Например, audi" />
                </label>
            </div>
        </div>
        <div class="brands__wrapper">
            <?php foreach ($brands as $key => $brand) { ?>
                <a href="/single-price-ofauto.php" class="brands__item" data-name="<?php echo ($brand['name']) ?>">
                    <div class="brands__img">
                        <img src="assets/img/brands/<?php echo ($brand['img']) ?>.png" alt="<?php echo ($brand['name']) ?>" />
                    </div>
                    <div class="brands__title"><?php echo ($brand['name']) ?></div>
                    <div class="brands__price">до 6 000 ₽</div>
                </a>
            <?php } ?>
        </div>
        <div class="brands__btn btn" id="brands_btn-more">
            показать больше марок
        </div>
    </div>
</section>