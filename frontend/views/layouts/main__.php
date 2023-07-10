<?php

/** @var \yii\web\View $this */
/** @var string $content */


use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
?>
<?php

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="nav-md">
<?php $this->beginBody() ?>
<header class="shopee-top container-wrapper">
    <div class="navbar-wrapper container-wrapper">
        <nav class="container navbar">
            <div class="flex v-center FAQGyh">
                <a href="//banhang.shopee.vn" target="_blank" rel="noopener noreferrer" class="_2TLLZP ZUq1cc">Kênh Người Bán</a>
                <a href="/seller/signup" class="flex _2TLLZP ZUq1cc" title="Trở thành Người bán Shopee">Trở thành Người bán Shopee</a>
                <div class="shopee-drawer ZUq1cc" id="pc-drawer-id-6">
                    <a class="_2TLLZP" href="/web/" target="_blank" rel="noopener noreferrer" id="temporaryId">Tải ứng dụng</a>
                </div><div class="flex _2TLLZP ZUq1cc HniJJe">Kết nối</div><div class="flex _2TLLZP FK3705">
                    <a class="D7dyDc header-navbar-background header-navbar-facebook-png" href="https://facebook.com/ShopeeVN" target="_blank" rel="noopener noreferrer" title="Kết nối Facebook"></a>
                    <a href="https://instagram.com/Shopee_VN" target="_blank" rel="noopener noreferrer" class="VR+xYc header-navbar-background header-navbar-instagram-png" title="Kết nối Instagram!"></a>
                </div>
            </div>
            <div class="navbar__spacer">

            </div>
            <ul class="navbar__links">
                <li class="navbar__link--notification navbar__link navbar__link--hoverable navbar__link--tappable">
                    <div class="stardust-popover" id="stardust-popover23" tabindex="0">
                        <div role="button" class="stardust-popover__target">
                            <a class="W-2aSq _6qcVOX" tabindex="-1" href="/user/notifications/order">
                                <svg viewBox="3 2.5 14 14" x="0" y="0" class="shopee-svg-icon icon-notification-2">
                                    <path d="m17 15.6-.6-1.2-.6-1.2v-7.3c0-.2 0-.4-.1-.6-.3-1.2-1.4-2.2-2.7-2.2h-1c-.3-.7-1.1-1.2-2.1-1.2s-1.8.5-2.1 1.3h-.8c-1.5 0-2.8 1.2-2.8 2.7v7.2l-1.2 2.5-.2.4h14.4zm-12.2-.8.1-.2.5-1v-.1-7.6c0-.8.7-1.5 1.5-1.5h6.1c.8 0 1.5.7 1.5 1.5v7.5.1l.6 1.2h-10.3z"></path>
                                    <path d="m10 18c1 0 1.9-.6 2.3-1.4h-4.6c.4.9 1.3 1.4 2.3 1.4z"></path>
                                </svg><span class="i4da+9">Thông báo</span>
                            </a>
                        </div>
                    </div>
                </li>
                <a class="navbar__link navbar__link--tappable navbar__link--hoverable navbar__link--help" href="https://help.shopee.vn/vn/s" target="_blank" rel="noopener noreferrer" tabindex="0">
                    <div class="navbar__help-center-icon">
                        <svg height="16" viewBox="0 0 16 16" width="16" class="shopee-svg-icon icon-help-center">
                            <g fill="none" fill-rule="evenodd" transform="translate(1)">
                                <circle cx="7" cy="8" r="7" stroke="currentColor"></circle>
                                <path fill="currentColor" d="m6.871 3.992c-.814 0-1.452.231-1.914.704-.462.462-.693 1.089-.693 1.892h1.155c0-.484.099-.858.297-1.122.22-.319.583-.473 1.078-.473.396 0 .715.11.935.33.209.22.319.517.319.902 0 .286-.11.55-.308.803l-.187.209c-.682.605-1.1 1.056-1.243 1.364-.154.286-.22.638-.22 1.045v.187h1.177v-.187c0-.264.055-.506.176-.726.099-.198.253-.396.462-.572.517-.451.825-.737.924-.858.275-.352.418-.803.418-1.342 0-.66-.22-1.188-.66-1.573-.44-.396-1.012-.583-1.716-.583zm-.198 6.435c-.22 0-.418.066-.572.22-.154.143-.231.33-.231.561 0 .22.077.407.231.561s.352.231.572.231.418-.077.572-.22c.154-.154.242-.341.242-.572s-.077-.418-.231-.561c-.154-.154-.352-.22-.583-.22z"></path>
                            </g>
                        </svg>
                    </div>
                    <span class="navbar__link-text navbar__link--tappable navbar__link--hoverable">Hỗ Trợ</span>
                </a>
                <li class="navbar__link--notification navbar__link navbar__link--hoverable navbar__link--tappable">
                    <div class="stardust-popover" id="stardust-popover24" tabindex="0">
                        <div role="button" class="stardust-popover__target">
                            <div class="n1sJN5"><div class="UkG+ar">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00065 14.6667C11.6825 14.6667 14.6673 11.6819 14.6673 8.00004C14.6673 4.31814 11.6825 1.33337 8.00065 1.33337C4.31875 1.33337 1.33398 4.31814 1.33398 8.00004C1.33398 11.6819 4.31875 14.6667 8.00065 14.6667Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M5.33464 8.00004C5.33464 11.6819 6.52854 14.6667 8.0013 14.6667C9.47406 14.6667 10.668 11.6819 10.668 8.00004C10.668 4.31814 9.47406 1.33337 8.0013 1.33337C6.52854 1.33337 5.33464 4.31814 5.33464 8.00004Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M1.33398 8H14.6673" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                            <span class="UfAWnk">Tiếng Việt</span>
                            <svg viewBox="0 0 12 12" fill="none" width="12" height="12" color="currentColor">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 8.146L11.146 3l.707.707-5.146 5.147a1 1 0 01-1.414 0L.146 3.707.854 3 6 8.146z" fill="currentColor"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </li>
            <a class="navbar__link navbar__link--account navbar__link--signup navbar__link--tappable navbar__link--hoverable navbar__link-text navbar__link-text--medium navbar__link-text--normal-case" href="/buyer/signup?keyword=s%C3%A1ch%20doremon&amp;next=https%3A%2F%2Fshopee.vn%2Fsearch%3Fkeyword%3Ds%25C3%25A1ch%2520doremon">Đăng Ký</a>
            <div class="navbar__link-separator">

            </div>
            <a class="navbar__link navbar__link--account navbar__link--login navbar__link--tappable navbar__link--hoverable navbar__link-text navbar__link-text--medium navbar__link-text--normal-case" href= "/book-reviews/frontend/web/index.php?r=site%2Flogin" > Đăng nhập </a>
             
        </ul>
    </nav>
</div>
<div class="container-wrapper header-with-search-wrapper">
    <div class="container header-with-search">
        <a class="header-with-search__logo-section" href="/">
            <div class="header-with-search__logo-wrapper">
                <svg viewBox="0 0 192 65" class="shopee-svg-icon header-with-search__shopee-logo icon-shopee-logo">
                    <g fill-rule="evenodd">
                        <path d="M35.6717403 44.953764c-.3333497 2.7510509-2.0003116 4.9543414-4.5823845 6.0575984-1.4379707.6145919-3.36871.9463856-4.896954.8421628-2.3840266-.0911143-4.6237865-.6708937-6.6883352-1.7307424-.7375522-.3788551-1.8370513-1.1352759-2.6813095-1.8437757-.213839-.1790053-.239235-.2937577-.0977428-.4944671.0764015-.1151823.2172535-.3229831.5286218-.7791994.45158-.6616533.5079208-.7446018.5587128-.8221779.14448-.2217688.3792333-.2411091.6107855-.0588804.0243289.0189105.0243289.0189105.0426824.0333083.0379873.0294402.0379873.0294402.1276204.0990653.0907002.0706996.14448.1123887.166248.1287205 2.2265285 1.7438508 4.8196989 2.7495466 7.4376251 2.8501162 3.6423042-.0496401 6.2615109-1.6873341 6.7308041-4.2020035.5160305-2.7675977-1.6565047-5.1582742-5.9070334-6.4908212-1.329344-.4166762-4.6895175-1.7616869-5.3090528-2.1250697-2.9094471-1.7071043-4.2697358-3.9430584-4.0763845-6.7048539.296216-3.8283059 3.8501677-6.6835796 8.340785-6.702705 2.0082079-.004083 4.0121475.4132378 5.937338 1.2244562.6816382.2873109 1.8987274.9496089 2.3189359 1.2633517.2420093.1777159.2898136.384872.1510957.60836-.0774686.12958-.2055158.3350171-.4754821.7632974l-.0029878.0047276c-.3553311.5640922-.3664286.5817134-.447952.7136572-.140852.2144625-.3064598.2344475-.5604202.0732783-2.0600669-1.3839063-4.3437898-2.0801572-6.8554368-2.130442-3.126914.061889-5.4706057 1.9228561-5.6246892 4.4579402-.0409751 2.2896772 1.676352 3.9613243 5.3858811 5.2358503 7.529819 2.4196871 10.4113092 5.25648 9.869029 9.7292478M26.3725216 5.42669372c4.9022893 0 8.8982174 4.65220288 9.0851664 10.47578358H17.2875686c.186949-5.8235807 4.1828771-10.47578358 9.084953-10.47578358m25.370857 11.57065968c0-.6047069-.4870064-1.0948761-1.0875481-1.0948761h-11.77736c-.28896-7.68927544-5.7774923-13.82058185-12.5059489-13.82058185-6.7282432 0-12.2167755 6.13130641-12.5057355 13.82058185l-11.79421958.0002149c-.59136492.0107446-1.06748731.4968309-1.06748731 1.0946612 0 .0285807.00106706.0569465.00320118.0848825H.99995732l1.6812605 37.0613963c.00021341.1031483.00405483.2071562.01173767.3118087.00170729.0236381.003628.0470614.00554871.0704847l.00362801.0782207.00405483.004083c.25545428 2.5789222 2.12707837 4.6560709 4.67201764 4.7519129l.00576212.0055872h37.4122078c.0177132.0002149.0354264.0004298.0531396.0004298.0177132 0 .0354264-.0002149.0531396-.0004298h.0796027l.0017073-.0015043c2.589329-.0706995 4.6867431-2.1768587 4.9082648-4.787585l.0012805-.0012893.0017073-.0350275c.0021341-.0275062.0040548-.0547975.0057621-.0823037.0040548-.065757.0068292-.1312992.0078963-.1964115l1.8344904-37.207738h-.0012805c.001067-.0186956.0014939-.0376062.0014939-.0565167M176.465457 41.1518926c.720839-2.3512494 2.900423-3.9186779 5.443734-3.9186779 2.427686 0 4.739107 1.6486899 5.537598 3.9141989l.054826.1556978h-11.082664l.046506-.1512188zm13.50267 3.4063683c.014933.0006399.014933.0006399.036906.0008531.021973-.0002132.021973-.0002132.044372-.0008531.53055-.0243144.950595-.4766911.950595-1.0271786 0-.0266606-.000853-.0496953-.00256-.0865936.000427-.0068251.000427-.020262.000427-.0635588 0-5.1926268-4.070748-9.4007319-9.09145-9.4007319-5.020488 0-9.091235 4.2081051-9.091235 9.4007319 0 .3871116.022399.7731567.067838 1.1568557l.00256.0204753.01408.1013102c.250022 1.8683731 1.047233 3.5831812 2.306302 4.9708108-.00064-.0006399.00064.0006399.007253.0078915 1.396026 1.536289 3.291455 2.5833031 5.393601 2.9748936l.02752.0053321v-.0027727l.13653.0228215c.070186.0119439.144211.0236746.243409.039031 2.766879.332724 5.221231-.0661182 7.299484-1.1127057.511777-.2578611.971928-.5423827 1.37064-.8429007.128211-.0968312.243622-.1904632.34346-.2781231.051412-.0452164.092372-.083181.114131-.1051493.468898-.4830897.498124-.6543572.215249-1.0954297-.31146-.4956734-.586228-.9179769-.821744-1.2675504-.082345-.1224254-.154023-.2267215-.214396-.3133151-.033279-.0475624-.033279-.0475624-.054399-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.00256-.0038391c-.256208-.3188605-.431565-.3480805-.715933-.0970445-.030292.0268739-.131624.1051493-.14997.1245582-1.999321 1.775381-4.729508 2.3465571-7.455854 1.7760208-.507724-.1362888-.982595-.3094759-1.419919-.5184948-1.708127-.8565509-2.918343-2.3826022-3.267563-4.1490253l-.02752-.1394881h13.754612zM154.831964 41.1518926c.720831-2.3512494 2.900389-3.9186779 5.44367-3.9186779 2.427657 0 4.739052 1.6486899 5.537747 3.9141989l.054612.1556978h-11.082534l.046505-.1512188zm13.502512 3.4063683c.015146.0006399.015146.0006399.037118.0008531.02176-.0002132.02176-.0002132.044159-.0008531.530543-.0243144.950584-.4766911.950584-1.0271786 0-.0266606-.000854-.0496953-.00256-.0865936.000426-.0068251.000426-.020262.000426-.0635588 0-5.1926268-4.070699-9.4007319-9.091342-9.4007319-5.020217 0-9.091343 4.2081051-9.091343 9.4007319 0 .3871116.022826.7731567.068051 1.1568557l.00256.0204753.01408.1013102c.250019 1.8683731 1.04722 3.5831812 2.306274 4.9708108-.00064-.0006399.00064.0006399.007254.0078915 1.396009 1.536289 3.291417 2.5833031 5.393538 2.9748936l.027519.0053321v-.0027727l.136529.0228215c.070184.0119439.144209.0236746.243619.039031 2.766847.332724 5.22117-.0661182 7.299185-1.1127057.511771-.2578611.971917-.5423827 1.370624-.8429007.128209-.0968312.243619-.1904632.343456-.2781231.051412-.0452164.09237-.083181.11413-.1051493.468892-.4830897.498118-.6543572.215246-1.0954297-.311457-.4956734-.586221-.9179769-.821734-1.2675504-.082344-.1224254-.154022-.2267215-.21418-.3133151-.033492-.0475624-.033492-.0475624-.054612-.0776356-.008319-.0117306-.008319-.0117306-.013866-.0191956l-.002346-.0038391c-.256419-.3188605-.431774-.3480805-.716138-.0970445-.030292.0268739-.131623.1051493-.149969.1245582-1.999084 1.775381-4.729452 2.3465571-7.455767 1.7760208-.507717-.1362888-.982582-.3094759-1.419902-.5184948-1.708107-.8565509-2.918095-2.3826022-3.267311-4.1490253l-.027733-.1394881h13.754451zM138.32144123 49.7357905c-3.38129629 0-6.14681004-2.6808521-6.23169343-6.04042014v-.31621743c.08401943-3.35418649 2.85039714-6.03546919 6.23169343-6.03546919 3.44242097 0 6.23320537 2.7740599 6.23320537 6.1960534 0 3.42199346-2.7907844 6.19605336-6.23320537 6.19605336m.00172791-15.67913203c-2.21776751 0-4.33682838.7553485-6.03989586 2.140764l-.19352548.1573553V34.6208558c0-.4623792-.0993546-.56419733-.56740117-.56419733h-2.17651376c-.47409424 0-.56761716.09428403-.56761716.56419733v27.6400724c0 .4539841.10583425.5641973.56761716.5641973h2.17651376c.46351081 0 .56740117-.1078454.56740117-.5641973V50.734168l.19352548.1573553c1.70328347 1.3856307 3.82234434 2.1409792 6.03989586 2.1409792 5.27140956 0 9.54473746-4.2479474 9.54473746-9.48802964 0-5.239867-4.2733279-9.48781439-9.54473746-9.48781439M115.907646 49.5240292c-3.449458 0-6.245805-2.7496948-6.245805-6.1425854 0-3.3928907 2.79656-6.1427988 6.245805-6.1427988 3.448821 0 6.24538 2.7499081 6.24538 6.1427988 0 3.3926772-2.796346 6.1425854-6.24538 6.1425854m.001914-15.5438312c-5.28187 0-9.563025 4.2112903-9.563025 9.4059406 0 5.1944369 4.281155 9.4059406 9.563025 9.4059406 5.281657 0 9.562387-4.2115037 9.562387-9.4059406 0-5.1946503-4.280517-9.4059406-9.562387-9.4059406M94.5919049 34.1890939c-1.9281307 0-3.7938902.6198995-5.3417715 1.7656047l-.188189.1393105V23.2574169c0-.4254677-.1395825-.5643476-.5649971-.5643476h-2.2782698c-.4600414 0-.5652122.1100273-.5652122.5643476v29.2834155c0 .443339.1135587.5647782.5652122.5647782h2.2782698c.4226187 0 .5649971-.1457701.5649971-.5647782v-9.5648406c.023658-3.011002 2.4931278-5.4412923 5.5299605-5.4412923 3.0445753 0 5.516841 2.4421328 5.5297454 5.4630394v9.5430935c0 .4844647.0806524.5645628.5652122.5645628h2.2726775c.481764 0 .565212-.0824666.565212-.5645628v-9.5710848c-.018066-4.8280677-4.0440197-8.7806537-8.9328471-8.7806537M62.8459442 47.7938061l-.0053397.0081519c-.3248668.4921188-.4609221.6991347-.5369593.8179812-.2560916.3812097-.224267.551113.1668119.8816949.91266.7358184 2.0858968 1.508535 2.8774525 1.8955369 2.2023021 1.076912 4.5810275 1.646045 7.1017886 1.6975309 1.6283921.0821628 3.6734936-.3050536 5.1963734-.9842376 2.7569891-1.2298679 4.5131066-3.6269626 4.8208863-6.5794607.4985136-4.7841067-2.6143125-7.7747902-10.6321784-10.1849709l-.0021359-.0006435c-3.7356476-1.2047686-5.4904836-2.8064071-5.4911243-5.0426086.1099976-2.4715346 2.4015793-4.3179454 5.4932602-4.4331449 2.4904317.0062212 4.6923065.6675996 6.8557356 2.0598624.4562232.2767364.666607.2256796.9733188-.172263.035242-.0587797.1332787-.2012238.543367-.790093l.0012815-.0019308c.3829626-.5500403.5089793-.7336731.5403767-.7879478.258441-.4863266.2214903-.6738208-.244985-1.0046173-.459427-.3290803-1.7535544-1.0024722-2.4936356-1.2978721-2.0583439-.8211991-4.1863175-1.2199998-6.3042524-1.1788111-4.8198184.1046878-8.578747 3.2393171-8.8265087 7.3515337-.1572005 2.9703036 1.350301 5.3588174 4.5000778 7.124567.8829712.4661613 4.1115618 1.6865902 5.6184225 2.1278667 4.2847814 1.2547527 6.5186944 3.5630343 6.0571315 6.2864205-.4192725 2.4743234-3.0117991 4.1199394-6.6498372 4.2325647-2.6382344-.0549182-5.2963324-1.0217793-7.6043603-2.7562084-.0115337-.0083664-.0700567-.0519149-.1779185-.1323615-.1516472-.1130543-.1516472-.1130543-.1742875-.1300017-.4705335-.3247898-.7473431-.2977598-1.0346184.1302162-.0346012.0529875-.3919333.5963776-.5681431.8632459">

                        </path>
                    </g>
                </svg>
            </div>
        </a>
        <div class="header-with-search__search-section">
            <div class="shopee-searchbar">
                <div class="shopee-searchbar__main">
                    <form role="search" class="shopee-searchbar-input" autocomplete="off">
                        <input aria-label="Đăng ký và nhận voucher bạn mới đến 70k!" class="shopee-searchbar-input__input" maxlength="128" placeholder="Đăng ký và nhận voucher bạn mới đến 70k!" autocomplete="off" aria-autocomplete="list" aria-controls="shopee-searchbar-listbox" aria-expanded="false" role="combobox" value="sách doremon">
                    </form>
                </div>
                <button type="button" class="btn btn-solid-primary btn--s btn--inline shopee-searchbar__search-button">
                    <svg height="19" viewBox="0 0 19 19" width="19" class="shopee-svg-icon">
                            <g fill-rule="evenodd" stroke="none" stroke-width="1">
                            <g transform="translate(-1016 -32)">
                                <g>
                                    <g transform="translate(405 21)">
                                        <g transform="translate(611 11)">
                                            <path d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z"></path><path d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="FaT0DB">
                <div class="pFceVI">
                    <a class="UPUwyq" href="/search?keyword=%C4%91%E1%BB%93%20ch%C6%A1i%20ng%C6%B0%E1%BB%9Di%20l%E1%BB%9Bn%2018%2B%20nam">Đồ Chơi Người Lớn 18+ Nam</a>
                    <a class="UPUwyq" href="/search?keyword=%C4%91i%E1%BB%87n%20tho%E1%BA%A1i%201k">Điện Thoại 1k</a>
                    <a class="UPUwyq" href="/search?keyword=set%20%C4%91%E1%BB%93%20n%E1%BB%AF">Set Đồ Nữ</a><a class="UPUwyq" href="/search?keyword=d%C3%A9p%20n%E1%BB%AF">Dép Nữ</a><a class="UPUwyq" href="/search?keyword=balo">Balo</a><a class="UPUwyq" href="/search?keyword=%C3%A1o%20ph%C3%B4ng">Áo Phông</a><a class="UPUwyq" href="/search?keyword=iphone%2014%20pro%20max">iPhone 14 Pro Max</a><a class="UPUwyq" href="/search?keyword=%C4%91%E1%BB%93%20d%C3%B9ng%20h%E1%BB%8Dc%20t%E1%BA%ADp">Đồ Dùng Học Tập</a><a class="UPUwyq" href="/search?keyword=%C3%A1o%20croptop">Áo Croptop</a><a class="UPUwyq" href="/search?keyword=v%C3%A1y">Váy</a><a class="UPUwyq" href="/search?keyword=gi%C3%A0y">Giày</a><a class="UPUwyq" href="/search?keyword=%C4%91%E1%BB%93%201k%20free%20ship">Đồ 1k Free Ship</a><a class="UPUwyq" href="/search?keyword=%C4%91%E1%BB%93%20%C4%83n%20v%E1%BA%B7t">Đồ Ăn Vặt</a><a class="UPUwyq" href="/search?keyword=%C3%A1o%20kho%C3%A1c">Áo Khoác</a><a class="UPUwyq" href="/search?keyword=lightstick%20blackpink">Lightstick Blackpink</a><a class="UPUwyq" href="/search?keyword=b%C3%A0n%20ph%C3%ADm%20c%C6%A1">Bàn Phím Cơ</a><a class="UPUwyq" href="/search?keyword=iphone">iPhone</a><a class="UPUwyq" href="/search?keyword=qu%E1%BA%A7n%20jean%20n%E1%BB%AF">Quần Jean Nữ</a><a class="UPUwyq" href="/search?keyword=son">Son</a><a class="UPUwyq" href="/search?keyword=%C3%A1o%20%C4%91%C3%A1%20b%C3%B3ng">Áo Đá Bóng</a><a class="UPUwyq" href="/search?keyword=v%C3%B2ng%20tay">Vòng Tay</a><a class="UPUwyq" href="/search?keyword=qu%E1%BA%A7n%20%C3%A1o%20nam">Quần Áo Nam</a><a class="UPUwyq" href="/search?keyword=%C4%91%E1%BB%93%20b%E1%BB%99%20n%E1%BB%AF">Đồ Bộ Nữ</a><a class="UPUwyq" href="/search?keyword=bao%20tay%20ch%C6%A1i%20game">Bao Tay Chơi Game</a><a class="UPUwyq" href="/search?keyword=%E1%BB%91p%20l%C6%B0ng%20samsung">Ốp Lưng Samsung</a><a class="UPUwyq" href="/search?keyword=nh%E1%BA%ABn">Nhẫn</a><a class="UPUwyq" href="/search?keyword=b%C3%ACnh%20n%C6%B0%E1%BB%9Bc">Bình Nước</a><a class="UPUwyq" href="/search?keyword=t%C3%BAi%20x%C3%A1ch%20n%E1%BB%AF">Túi Xách Nữ</a><a class="UPUwyq" href="/search?keyword=g%E1%BA%A5u%20b%C3%B4ng">Gấu Bông</a><a class="UPUwyq" href="/search?keyword=sticker">Sticker</a></div></div></div><div class="header-with-search__cart-wrapper"><div class="stardust-popover" id="cart_drawer_target_id"><div role="button" class="stardust-popover__target"><div class="cart-drawer-container"><a class="cart-drawer flex v-center" id="cart_drawer_target_id" href="/buyer/login?keyword=s%C3%A1ch%20doremon&amp;next=https%3A%2F%2Fshopee.vn%2Fsearch%3Fkeyword%3Ds%25C3%25A1ch%2520doremon"><svg viewBox="0 0 26.6 25.6" class="shopee-svg-icon navbar__link-icon icon-shopping-cart-2"><polyline fill="none" points="2 1.7 5.5 1.7 9.6 18.3 21.2 18.3 24.6 6.1 7 6.1" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2.5"></polyline><circle cx="10.7" cy="23" r="2.2" stroke="none"></circle><circle cx="19.7" cy="23" r="2.2" stroke="none"></circle></svg></a></div></div></div></div></div></div></header>
