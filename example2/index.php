<?php
// header.php — верхняя часть сайта
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Пример 2");
var_dump(\Bitrix\Main\Config\Configuration::getValue('exception_handling'))
?>

<!— содержимое страницы —>
dsfdshfsdjfjakdsflkdsafjlkdsafjklasdjf;lksdajflksdajflkadsjflkdsafj;dlsaf
dsflasdkflasdkf;lkdsal;fksdal;fkd;lsafk;ldsafksdl;afk;ldsaf

<?php
// footer.php — нижняя часть сайта
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
