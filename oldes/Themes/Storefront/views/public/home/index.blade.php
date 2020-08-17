<!doctype html>
<!--[if IE 8]><html class="ie8 " lang="tr"><![endif]-->
<!--[if IE 9]><html class="ie9 " lang="tr"><![endif]-->
<!--[if gt IE 9]><!--><html class="" lang="tr"><!--<![endif]-->
<head>
    <title>Başlat İlan Sistemi</title>
    <!--[if lt IE 9]>
<script type="text/javascript">
document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
</script>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta id="Content-Language" http-equiv="Content-Language" content="tr"/>
<meta name="rating" content="general"/>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="revisit-after" content="1 Days"/>
<link rel="shortcut icon" href="https://www.sahibinden.com/favicon.ico" type="image/x-icon"/>
<link rel="search" type="application/opensearchdescription+xml" title="sahibinden.com" href="https://www.sahibinden.com/static/opensearch"/>

<link rel="alternate" hreflang="en" href="https://www.sahibinden.com/en"/>
<meta name="description" content="Sahibinden satılık, kiralık, ikinci el, otomobil, emlak ve her türlü ürün - Türkiye'nin en büyük ücretsiz ilan ve online alışveriş sitesi."/>
<meta name="keywords" content="sahibinden, alışveriş, online alışveriş, emlak fiyatları, 2.el oto, ikinci el araba fiyatları, motorsiklet fiyatları, motor, kol saati modelleri, SLR fotoğraf makinesi, cep telefonu fiyatları, bayan iç giyim, bayan çanta, bayan ayakkabı, gelinlik modelleri, oto yedek parça fiyatları, mp3 playerlar, çocuk oto koltuğu, bilgisayar parçaları, klasik araba, tekne, ücretsiz ilan, bedava ilan, ücretsiz emlak ilan, ücretsiz oto ilan, seri ilan, ücretsiz iş ilanı"/>
<meta name="robots" content="NOODP,index,follow"/>
<link rel="icon" href="https://www.sahibinden.com/favicon.ico" type="image/x-icon"/>

<link rel="canonical" href="https://www.sahibinden.com/"/>
        <meta name="x-canonical-url" content="/"/>
<script type="text/javascript">
    window.skipJQueryInlineBlockNeedsLayoutTest = true;
</script>
<script type="text/javascript">
    /*<![CDATA[*/
    function getBanner(zoneId, extraParams, targetId) {
        
    };
    /*]]>*/
</script>

<meta property="al:ios:url" content="sahibinden://https://www.sahibinden.com/"/>
<meta property="al:ios:app_store_id" content="418535251"/>
<meta property="al:ios:app_name" content="sahibinden.com mobil"/>
<meta property="al:android:url" content="sahibinden://https://www.sahibinden.com/"/>
<meta property="al:android:package" content="com.sahibinden"/>
<meta property="al:android:app_name" content="sahibinden.com"/>


<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "sahibinden.com",
        "url": "https://www.sahibinden.com",
        "logo": "https://image5.sahibinden.com/cms/files/sahi_images/Logo-1x.png",
        "sameAs": [
            "https://www.facebook.com/sahibindencom",
            "https://twitter.com/sahibindencom",
            "https://www.youtube.com/user/sahibindencom",
            "https://www.linkedin.com/company/sahibinden-com",
            "https://www.instagram.com/sahibindencom"
        ]
    }
</script>
<script>
    //initials
    window.Criteo = window.Criteo || {};
    window.Criteo.events = window.Criteo.events || [];

    window.googletag = window.googletag || {};
    window.googletag.cmd = window.googletag.cmd || [];

    window.pbjs = window.pbjs || {};
    window.pbjs.que = window.pbjs.que || [];

    var customConfigObject = {
        "buckets": [
            {
                "precision": 2,
                "min": 0,
                "max": 10,
                "increment": 0.01
            },
            {
                "precision": 2,
                "min": 10,
                "max": 25,
                "increment": 0.05
            },
            {
                "precision": 2,
                "min": 25,
                "max": 50,
                "increment": 0.1
            },
            {
                "precision": 2,
                "min": 50,
                "max": 100,
                "increment": 0.25
            }
        ]
    };

    var dfpLibraryHelper = (function () {


        function createCriteoEvent(fn) {
            window.Criteo.events.push(fn);
        }

        function createGtpEvent(fn) {
            window.googletag.cmd.push(fn);
        }

        function createPrebidEvent(fn) {
            window.pbjs.que.push(fn);
        }

        function loadJs(url, useSSL, injectHead) {
            return new Promise(function (resolve, reject) {
                var head = document.getElementsByTagName('head');
                var script = document.createElement('script');
                script.setAttribute('type', 'text/javascript');
                var sslFlag = (useSSL ? true :  'https:' == document.location.protocol);
                script.src = (sslFlag ? 'https:' : 'http:') +
                    '//' + url;
                script.async = true;
                script.onload = resolve;
                script.onerror = reject;
                if (injectHead) {
                    head[0].appendChild(script);
                } else {
                    var node = document.getElementsByTagName('script')[0];
                    node.parentNode.insertBefore(script, node);
                }
            });
        }

        var criteoApi = {
            initCriteSlots: initCriteSlots
        };

        var gptApi = {
            addPubServiceSlots: addPubServiceSlots,
            displaySlots: displaySlots,
            refreshSlots: refreshSlots,
            refreshSlotsForEach: refreshSlotsForEach,
            clearSlots: clearSlots
        };

        var prebidApi = {
            requestBids: requestBids
        };

        var lastAdUnits = [];

        function requestBids(adUnits) {
            var PREBID_TIMEOUT = 2000;

            pbjs.setConfig({
                priceGranularity: customConfigObject,
                enableSendAllBids: true,
                bidderTimeout: PREBID_TIMEOUT,
                timeoutBuffer: 300
            });

            lastAdUnits.forEach((function (value) {
                pbjs.removeAdUnit(value.code);
            }));

            lastAdUnits = adUnits;

            adUnits.forEach(function (x) {
                if (!x.code)
                    throw 'code must be provided';

                pbjs.addAdUnits(x);
            });

            var promise = new Promise(function (resolve, reject) {
                pbjs.requestBids({
                    bidsBackHandler: function () {
                        createGtpEvent(function () {
                            pbjs.setTargetingForGPTAsync();
                            resolve();
                        });
                    },
                    timeout: PREBID_TIMEOUT
                });
            });

            return promise;
        }

        function DeferWrapper() {
            this.init();
        }

        DeferWrapper.prototype.init = function () {
            var self = this;
            var resolveFn;
            var rejectFn;

            var promise = new Promise(function (resolve, reject) {
                resolveFn = resolve;
                rejectFn = reject;
            });

            Object.defineProperty(self, 'promise', {
                value: promise,
                writable: false
            });

            DeferWrapper.prototype.resolve = function (x) {
                resolveFn(x);
            };

            DeferWrapper.prototype.reject = function (x) {
                rejectFn(x);
            };
        };

        function defer() {
            return new DeferWrapper();
        }

        function DfpHelperNew() {
            this.gptApi = gptApi;
            this.prebidApi = prebidApi;
            this.criteoApi = criteoApi;
        }

        DfpHelperNew.prototype.defer = defer;

        DfpHelperNew.prototype.initPrebid = function (useSSL, injectHead) {
            return new Promise(function (resolve, reject) {
                createPrebidEvent(function () {
                    resolve();
                })
            })
        };

        function buildCriteoParams(slotConfigs) {
            var placements = slotConfigs.map(function (eachSlot) {
                return buildCriteoParam(eachSlot);
            });
            var bidRequest = {
                "placements": placements
            };
            return bidRequest;
        }

        function buildCriteoParam(slotConfig) {
            return {
                slotid: slotConfig.slotId,
                zoneid: slotConfig.zoneId
            }
        }

        function initCriteSlots(slotConfigs,isResponsiveSearch) {
            var bidRequest = buildCriteoParams(slotConfigs);
            return makeCriteoRequest(bidRequest,isResponsiveSearch);
        }


        DfpHelperNew.prototype.initCriteo = function (useSSL, injectHead) {
            return new Promise(function (resolve, reject) {
                loadJs('static.criteo.net/js/ld/publishertag.js', useSSL, injectHead)
                    .then(function () {
                        createCriteoEvent(function () {
                            resolve();
                        })
                    }).catch(function () {
                    reject();
                })
            })
        };

        DfpHelperNew.prototype.initGpt = function (useSSL, injectHead) {
            return new Promise(function (resolve, reject) {
                loadJs('www.googletagservices.com/tag/js/gpt.js', useSSL, injectHead)
                    .then(function () {
                        createGtpEvent(function () {
                            resolve();
                        })
                    }).catch(function () {
                    reject();
                })
            })
        };

        function addPubServiceSlots(slots) {
            slots.forEach(function (value) {
                if (!value.__slotServiceDefined) {
                    value.addService(googletag.pubads());
                    value.__slotServiceDefined = true
                }
            })
        }


        function clearSlots(slots) {
            if (googletag) {
                googletag.pubads().clear(slots);
            }
        }

        function displaySlots(slots) {
            slots.forEach(function (value) {
                googletag.display(value);
            });
        }

        function refreshSlots(slots) {
            googletag.pubads().refresh(slots)
        }

        function refreshSlotsForEach(slots) {
            slots.forEach(function (x) {
                googletag.pubads().refresh([x])
            });
        }


        function makeCriteoRequest(bidRequest,isResponsiveSearch) {
            var result = {
                resolved: false,
                criteoTimeout: false
            };
            var delayPromise = new Promise(function (resolveFn) {
                setTimeout(function () {
                    if (!result.resolved) {
                        result.resolved = true;
                        result.criteoTimeout = true;
                        resolveFn(result);
                    }
                }, (isResponsiveSearch ? 600 : 500 ) )
            });


            var criteoRequest = new Promise(function (resolveFn) {
                Criteo.SetLineItemRanges("0..10:0.01;10..25:0.05;25..50:0.10;50..100:0.25");
                Criteo.RequestBids(bidRequest, function (x) {
                    if (!result.resolved) {
                        result.resolved = true;
                        setTimeout(function () {
                            Criteo.SetDFPKeyValueTargeting();
                            resolveFn(result);
                        })
                    }
                });
            });

            return Promise.race([criteoRequest]);
        }


        return new DfpHelperNew();
    })();

</script>

<!-- Real User Monitoring -->
<script language="javascript">
    window.shbdn_rum = window.shbdn_rum || {};
    window.shbdn_rum.requestType = "HOME_PAGE";
</script>
<!-- bundles -->
<!-- asset manager injected css [common] -->
<link href="https://s0.shbdn.com/assets/common:04df909cfdbf8110e408b24473b042ca.css" media="screen, print" rel="stylesheet" type="text/css">
<!-- asset manager injected css [homepage] -->
<link href="https://s0.shbdn.com/assets/homepage:8ddf78bc70a5c497ddf40dcbf89b3489.css" media="screen, print" rel="stylesheet" type="text/css">

</head>
<body class=" ">

<div class="header-container ">
    <div class="header ">
        <!--suppress XmlUnboundNsPrefix, XmlUnboundNsPrefix -->
            
                <a class="logo1" href="https://www.sahibinden.com"
                   title="sahibinden.com anasayfasına dön">

                    sahibinden.com anasayfasına dön</a>
            
        <!--suppress XmlUnboundNsPrefix, XmlUnboundNsPrefix -->
        <form id="searchSuggestionForm" action="/kelime-ile-arama" method="get" novalidate>
            <input type="text" id="searchText" name="query_text" placeholder="Kelime, ilan no veya mağaza adı ile ara"
                   title="Kelime, ilan no veya mağaza adı ile ara" required="required"/>
            <button type="submit" value="Ara"></button>
            <span id="clearSearchPhrase"></span>
            
        </form>
        <ul>
            <li class="login-text">
                <a rel="nofollow" href="https://secure.sahibinden.com/giris" data-funnel-trigger-login="header" title="Giriş Yap">
                    Giriş Yap</a>
            </li>
            <li class="register-text">
                <a rel="nofollow" href="https://secure.sahibinden.com/kayit" data-funnel-trigger-register="header" title="Üye Ol">
                    Üye Ol</a>
            </li>
            <li class="username-area" data-hj-suppress>
                <a class="tipitip-trigger" data-open-event="click" data-close-event="click" data-position="south-east"
                   data-class="header-custom-tooltip user-menu-tooltip " data-target="#user-login-tooltip" data-sticky="true" href="#" title="sahibinden.com"></a>
            </li>
            <li class="messages">
                <a href="#" class="new tipitip-trigger" data-open-event="click" data-close-event="click" data-position="south-east" data-class="header-custom-tooltip user-messages-tooltip loading-status" data-target="#user-messages-tooltip" data-sticky="true" title="Mesajlar">Mesajlar</a>
                <span></span>
            </li>
            <li class="notifications not-allowed-for-expertise">
                <a class="tipitip-trigger" data-open-event="click" data-close-event="click" data-position="south-east" data-class="header-custom-tooltip user-notifications-tooltip" data-target="#user-notifications-tooltip" data-sticky="true" href="#" title="sahibinden.com"></a>
                <span></span>
            </li>
            <li class="favorite-classified not-allowed-for-expertise">
                <a href="https://banaozel.sahibinden.com/favori-ilanlar" class="new-my-account-link" rel="nofollow" title="Favori İlanlarım">Favori İlanlarım</a>
                <span></span>
            </li>
            <li class="favorite-search not-allowed-for-expertise">
                <a href="#" class="tipitip-trigger" data-open-event="click" data-close-event="click"
                   data-position="south-east" data-class="header-custom-tooltip favorite-search-tooltip loading-status"
                   data-target="#favorite-search-tooltip" data-sticky="true" title="Favori Aramalarım">Favori Aramalarım</a>
            </li>
            <li class="new-classified">
                <a id="post-new-classified" rel="nofollow" class="btn btn-flat btn-link sourceTrigger trackLinkClick trackId_ucretsiz_ilan" data-source="new_classified"
                   href="https://banaozel.sahibinden.com/ilan-ver/adim-1/?state=new" title="Ücretsiz* İlan Ver">
                    Ücretsiz* İlan Ver</a>
            </li>
            <li class="add-expertise-report">
                <a id="post-add-expertise-report" rel="nofollow" class="btn btn-flat btn-link sourceTrigger trackLinkClick trackId_ucretsiz_ilan" data-source="add-expertise-report"
                   href="https://banaozel.sahibinden.com/ekspertiz-ekle/adim-1" title="Ekspertiz Raporu Oluştur">
                    Ekspertiz Raporu Oluştur</a>
            </li>
        </ul>
        <div id="user-login-tooltip" class="tipitip-target">
            <div class="my-account-menu">

                <!-- Profile Area -->
                <div id="profileArea" class="profile-area" data-hj-suppress>
                    <p class="add-profile-photo">
                        <span></span>
                        <a href="https://banaozel.sahibinden.com/bilgilerim" title="Fotoğfar Ekle">Fotoğraf Ekle</a>
                    </p>
                    <p class="store-name"></p>
                    <h3 class="name-surname"></h3>
                </div>

                <!-- Profile Menu -->
                <ul class="header-custom-menu">
                    <li>
                        <ul>
                            <li class="not-allowed-for-expertise"><a href="https://banaozel.sahibinden.com/" rel="nofollow" title="Bana Özel Özet">Bana Özel Özet</a></li>
                            <li class="my-account-classifieds not-allowed-for-expertise">
                                <a href="https://banaozel.sahibinden.com/ilanlarim" rel="nofollow" title="İlanlarım">İlanlarım</a>
                            </li>
                        </ul>
                    </li>
                    <li class="my-account-favorites not-allowed-for-expertise">
                        <ul>
                            <li>
                                <a href="https://banaozel.sahibinden.com/favori-ilanlar" rel="nofollow" title="Favorilerim">Favorilerim</a>
                            </li>
                        </ul>
                    </li>
                    <li class="not-allowed-for-expertise">
                        <ul>
                            <li class="my-basket-link">
                                <a href="https://secure.sahibinden.com/odeme?hideSteps=true" rel="nofollow" title="Sepetim">Sepetim</a>
                            </li>
                            <li class="bulk-promotion">
                                <a href="https://banaozel.sahibinden.com/magazam/toplu-doping" rel="nofollow" title="Doping Satın Al">Doping Satın Al</a>
                            </li>
                        </ul>
                    </li>
                    <li class="get-links not-allowed-for-expertise">
                        <ul>
                            <li class="my-purchase-transactions">
                                <a href="https://banaozel.sahibinden.com/mevcut-siparislerim" rel="nofollow" title="Siparişlerim">Siparişlerim</a>
                            </li>
                            <li class="my-sale-transactions">
                                <a href="https://banaozel.sahibinden.com/satistaki-urunlerim" rel="nofollow" title="Satış İşlemlerim">Satış İşlemlerim</a>
                            </li>
                        </ul>
                    </li>
                    <li class="store-links not-allowed-for-expertise">
                        <ul>
                            <li>
                                <a class="store-url" rel="nofollow" title="Mağaza Sayfam">Mağaza Sayfam</a>
                            </li>
                            <li class="store-management">
                                <a href="https://banaozel.sahibinden.com/magazam/icerik" rel="nofollow" title="Mağazam">Mağazam</a>
                            </li>
                            <li class="emlak-ofisim">
                                <a href="https://banaozel.sahibinden.com/emlak-ofisim" rel="nofollow" class="header-new-sticker" data-sticker-text="yeni" title="Emlak Ofisim">Emlak Ofisim</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="my-user-info-link not-allowed-for-expertise">
                                <a href="https://banaozel.sahibinden.com/bilgilerim" rel="nofollow" title="Üyeliğim">Üyeliğim</a>
                            </li>
                            <li class="logout">
                                <a href="https://www.sahibinden.com/cikis" rel="nofollow" title="Çıkış Yap">Çıkış Yap</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="user-messages-tooltip" class="tipitip-target">
            <ul class="header-tabs">
                <li class="messages-link active">
                    <a href="#" title="Mesajlarım">Mesajlarım
                        <span></span>
                    </a>
                </li>
                <li class="get-messages-link">
                    <a href="#" title="GeT Mesajlarım">GeT Mesajlarım
                        <span></span>
                    </a>
                </li>
                <li class="informations-link">
                    <a href="#" title="Bilgilendirmeler">Bilgilendirmeler
                        <span></span>
                    </a>
                </li>
            </ul>

            <div class="messages-box user-tooltip-content">
                <ul></ul>
                <a href="https://banaozel.sahibinden.com/mesajlarim" class="show-all" title="Tümünü Gör">Tümünü Gör</a>
                <p class="no-content-text">Mesajınız <br> Bulunmamaktadır</p>
            </div>
            <!-- Messages Box -->

            <div class="get-messages-box user-tooltip-content">
                <ul></ul>
                <a href="https://banaozel.sahibinden.com/get/mesajlarim" class="show-all" title="Tümünü Gör">Tümünü Gör</a>
                <p class="no-content-text">Mesajınız <br> Bulunmamaktadır</p>
            </div>
            <!-- GeT Messages Box -->

            <!-- Informations Box -->
            <div class="informations-box user-tooltip-content">
                <ul></ul>
                <a href="https://banaozel.sahibinden.com/bilgilendirmeler" class="show-all" title="Tümünü Gör">Tümünü Gör</a>
                <p class="no-content-text">Bilgilendirmeniz <br> Bulunmamaktadır</p>
            </div>
            <!-- Informations Box -->
        </div>
        <div id="user-notifications-tooltip" class="tipitip-target">
            <ul class="header-tabs">
                <li class="active">
                    <a title="Bildirimlerim">Bildirimlerim
                        <span></span>
                    </a>
                </li>
            </ul>

            <div class="notifications-box">

                <h6>İlanlar</h6>
                <ul class="header-custom-menu" id="classifiedNotification">
                    <li>
                        <ul>
                            <li>
                                <a class="activeClassifieds" href="https://banaozel.sahibinden.com/ilanlarim" rel="nofollow" title="Yayında Olanlar">Yayında Olanlar&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="passiveClassifieds" href="https://banaozel.sahibinden.com/ilanlarim/pasif" rel="nofollow" title="Yayında Olmayanlar">Yayında Olmayanlar&nbsp;<span></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <h6>Ekspertiz Raporları</h6>
                <ul class="header-custom-menu" id="expertiseReportNotification">
                    <li>
                        <ul>
                            <li>
                                <a class="activeClassifieds unreadUnboundExpertiseReportAddedCount" href="https://banaozel.sahibinden.com/ekspertiz-raporlarim?reportStatus=U" rel="nofollow" title="ilana eklenmeyenler">ilana eklenmeyenler&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="activeClassifieds unreadBoundExpertiseReportAddedCount" href="https://banaozel.sahibinden.com/ekspertiz-raporlarim?reportStatus=B" rel="nofollow" title="ilana eklenenler">ilana eklenenler&nbsp;<span></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <h6>Siparişlerim</h6>
                <ul class="header-custom-menu" id="purchasesNotification">
                    <li>
                        <ul>
                            <li>
                                <a class="waitingCargo currentPurchases" href="https://banaozel.sahibinden.com/mevcut-siparislerim" rel="nofollow" title="Mevcut Siparişlerim">Mevcut Siparişlerim&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="refunded" href="https://banaozel.sahibinden.com/iade-islemlerim" rel="nofollow" title="İade İşlemlerim">İade İşlemlerim&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="successfulPurchases" href="https://banaozel.sahibinden.com/tamamlananlar" rel="nofollow" title="Tamamlananlar">Tamamlananlar&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="mss" href="https://banaozel.sahibinden.com/get" rel="nofollow" title="Mesafeli Satış Sözleşmelerim">Mesafeli Satış Sözleşmelerim&nbsp;<span></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <h6>Satış İşlemlerim</h6>
                <ul class="header-custom-menu" id="salesNotification">
                    <li>
                        <ul>
                            <li>
                                <a class="activeSecureTradeClassifieds" href="https://banaozel.sahibinden.com/satistaki-urunlerim" rel="nofollow" title="Satıştaki Ürünlerim">Satıştaki Ürünlerim&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="waitingForCargoInfo" href="https://banaozel.sahibinden.com/kargolayacaklarim" rel="nofollow" title="Kargolayacaklarım">Kargolayacaklarım&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="waitingForBuyerConfirmation" href="https://banaozel.sahibinden.com/alicidan-onay-beklediklerim" rel="nofollow" title="Alıcıdan Onay Beklediklerim">Alıcıdan Onay Beklediklerim&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="successfulSales" href="https://banaozel.sahibinden.com/basarili-satislarim" rel="nofollow" title="Başarılı Satışlarım">Başarılı Satışlarım&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="refundedSales" href="https://banaozel.sahibinden.com/iade-edilenler" rel="nofollow" title="İade Edilenler">İade Edilenler&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="passiveSecureTradeClassifieds" href="https://banaozel.sahibinden.com/satista-olmayan-urunlerim" rel="nofollow" title="Satışta Olmayan Ürünlerim">Satışta Olmayan Ürünlerim&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="mss" href="https://banaozel.sahibinden.com/get" rel="nofollow" title="Mesafeli Satış Sözleşmelerim">Mesafeli Satış Sözleşmelerim&nbsp;<span></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <h6>İadeli Kaporalarım</h6>
                <ul class="header-custom-menu" id="myDepositNotification">
                    <li>
                        <ul>
                            <li>
                                <a class="sentDeposits" href="https://banaozel.sahibinden.com/kapora/gonderilen" rel="nofollow" title="Gönderdiklerim">Gönderdiklerim&nbsp;<span></span></a>
                            </li>
                            <li>
                                <a class="receivedDeposits" href="https://banaozel.sahibinden.com/kapora/alinan" rel="nofollow" title="Gelenler">Gelenler&nbsp;<span></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <a href="#" class="show-all" id="readAllNotifications" title="Tümünü Okundu Olarak İşaretle">Tümünü Okundu Olarak İşaretle</a>
                <p class="no-content-text">Bildiriminiz <br> Bulunmamaktadır</p>
            </div>
        </div>
        <div id="favorite-search-tooltip" class="tipitip-target header-custom-tooltip">
            <ul class="header-tabs">
                <li class="active">
                    <a title="Favori Aramalarım">Favori Aramalarım</span></a>
                </li>
            </ul>

            <div class="favorite-search-box">
                <ul class="header-custom-menu">
                    <li>
                        <ul class="favorite-search-sub-menu"></ul>
                    </li>
                </ul>
            </div>

            <a href="https://banaozel.sahibinden.com/favori-aramalarim" class="show-all" title="Favori Aramalarım'a Git">Favori Aramalarım'a Git</a>
            <p class="no-content-text">Favori Aramanız <br> Bulunmamaktadır</p>
        </div>
        </div>
    </div>
<div id="container">
    <div id="topMessage"></div>
    <!-- Browser Support Information -->

    <noscript>
        <div class="top-message">
            <div class="message-container no-script">
                <p><strong>Tarayıcınızda JavaScript devre dışı bırakılmıştır.</strong> sahibinden.com’u doğru görüntüleyebilmek için tarayıcınızda JavaScript'i etkinleştirmelisiniz.</p></div>
        </div>
    </noscript>
    <!-- Disable JavaScript Information -->


    <div class="download-app-side-bar" style="display: none">
        <label>Uygulamayı İndir<span class="close"></span></label>
        <div class="content">
            <p class="info">sahibinden mobil uygulamasının milyonlarca kullanıcısına sen de <b>katıl</b>!</p>
            <p class="how"><b>SAHI</b> yaz <b>4350'</b> ye telefonundan ücretsiz <strong>SMS</strong> at.</p>
            <div class="download-links">
                <a class="apple-store" target="_blank" href="https://itunes.apple.com/tr/app/sahibinden.com-mobil/id418535251?mt=8" title="app store"></a>
                <a class="google-play" target="_blank" href="https://play.google.com/store/apps/details?id=com.sahibinden" title="google play"></a>
            </div>
            <span class="hide"></span>
        </div>
        <div class="overlay"></div>
    </div>


    <div class="homepage">
        <div class="content">
            <script type="text/javascript">
    var isMastheadEnabled = true;
    var isMastheadActive = false;
    var mastHeadIframeHeight = 25;
    var isMastheadPreview = location.href.indexOf('?google_preview=') != -1||location.href.indexOf('&google_preview=') != -1;

    function checkmastHeadIframeHeight() {
        var currentHeight = $('#div-gpt-ad-1439371178201-0 iframe').height();
        if (currentHeight > 100) {
            isMastheadActive = true;
        } else {
            isMastheadActive = false;
        }
        $('#div-gpt-ad-1439371178201-0').attr("isactive", isMastheadActive);
        setTimeout(function () {
            checkmastHeadIframeHeight();
        }, 100);
    }

    document.createElement = function(create) {
        return function() {
            var obj = create.apply(this, arguments);
            if (obj.tagName.toLowerCase() === "iframe") {
                obj.setAttribute("allowfullscreen", "true");
            }
            return obj;
        };
    }(document.createElement);

    googletag.cmd.push(function() {
        if(isMastheadEnabled||isMastheadPreview) {
            googletag.defineSlot('/32607536/mainpage_masthead', [[970, 25], [970, 250]], 'div-gpt-ad-1439371178201-0').addService(googletag.pubads());
        }
        googletag.pubads().enableSingleRequest();
        googletag.pubads().collapseEmptyDivs();
        googletag.pubads().addEventListener('slotRenderEnded', function(event) {

            if(event.isEmpty) {
                return;
            }

            if (event.slot.getSlotElementId() === 'div-gpt-ad-1439371178201-0') {

                adjustMastheadClasses();
            }
        });

        googletag.enableServices();

        var adjustMastheadClasses = function() {

            var adSlotElement = $('#div-gpt-ad-1439371178201-0');

            var iframe = $('#div-gpt-ad-1439371178201-0 iframe');

            iframe.load(function() {

                var documentOfIframe = iframe.context;

                $(iframe).attr('allowfullscreen','true');
                $(iframe).attr('webkitallowfullscreen','true');
                $(iframe).attr('mozallowfullscreen','true');

                if(documentOfIframe) {
                    $(documentOfIframe).ready(function() {
                        var isBannerClosedBefore = (getCookie('bannerClosed') == "true");

                        if(!isBannerClosedBefore) {
                            adSlotElement.removeClass('banner-masthead-opened').addClass('banner-masthead');
                        }
                        
                        checkmastHeadIframeHeight();
                    });
                }

            });
        }

    });

</script>


<div id='div-gpt-ad-1439371178201-0' class="banner-masthead-default">
    <script type='text/javascript'>
        var getCookie = function (key) {
            var regexForMatch = new RegExp("(; )?" + key + "=([^;]*);?"),
                mathced = document.cookie.match(regexForMatch);

            return mathced !== null && mathced.length>2 ? mathced[2] : null;
        }

        var adjustSlotMainContainer = function() {

            var isBannerClosedBefore = (getCookie('bannerClosed') == "true");

            var defaultCssClass = isBannerClosedBefore ? 'banner-masthead' : 'banner-masthead-opened';

            document.getElementById('div-gpt-ad-1439371178201-0').setAttribute('class', defaultCssClass);
        };

        if(isMastheadEnabled||isMastheadPreview){
            adjustSlotMainContainer();
            googletag.cmd.push(function()
                { googletag.display('div-gpt-ad-1439371178201-0'); }
            );
        }else{
            document.getElementById("div-gpt-ad-1439371178201-0").style.display = "none";
        }
    </script>
</div>

<!-- Banner Masthead -->
<aside>
                <div class="uiBox">
                    <h3 class="cat-title">Kategoriler</h3>
                    <nav>
                        

<ul class="categories-left-menu">
    <li class="category-3518">
            <a href="/kategori/emlak" title="Emlak" class="">
                Emlak</a>
            <span>(10)</span>
            <input type="checkbox" id="category-3518" class="show-hide-input">
            <ul>
                <li class="">
                        <a href="/kategori/emlak-konut" title="Konut">
                            Konut</a>
                        <span>
                                (3)
                            </span>
                        </li>
                <li class="">
                        <a href="/kategori/is-yeri" title="İş Yeri">
                            İş Yeri</a>
                        <span>
                                (4)
                            </span>
                        </li>
                <li class="">
                        <a href="/kategori/arsa" title="Arsa">
                            Arsa</a>
                        <span>
                                (1)
                            </span>
                        </li>

                </ul>
        </li>
    <li class="category-3517">
            <a href="/kategori/vasita" title="Vasıta" class="">
                Vasıta</a>
            <span>(18)</span>
            <input type="checkbox" id="category-3517" class="show-hide-input">
            <ul>
                <li class="">
                        <a href="/kategori/otomobil" title="Otomobil">
                            Otomobil</a>
                        <span>
                                (10)
                            </span>
                        </li>
                <li class="">
                        <a href="/kategori/arazi-suv-pickup" title="Arazi, SUV & Pickup">
                            Arazi, SUV &amp; Pickup</a>
                        <span>
                                (8)
                            </span>
                        </li>
                    </li>
                </ul>
        </li>

    </ul>
</nav>
                </div>


            </aside>
            <!-- Left Side -->

                <div class="homepage-content">


                    <div class="uiBox showcase">
    <h3>
        <small><a href="/arama/ara?viewType=Gallery&category=vc%3AHomepageShowcase">Tüm vitrin ilanlarını göster</a></small>
        Anasayfa Vitrini</h3>
    <ul class="vitrin-list clearfix">
        @php
            
            $array = ['Kazasız Walkswagen', 'Boyasız Otomobil',  'Apartman Dairesi', 'Sulu Tarla', 'Villa 3 Kat', 'Tertemiz Konut', 'Şık Araba'];
            use Illuminate\Support\Arr;

            $randIndex = array_rand($array, 4);
        @endphp
        @for($i=1; $i<=35; $i++)
        <li>
                <a href="/ilan/vasita-otomobil-bmw-bmw-z4-3.0-otomatik-super-sport-kazasiz-degisensiz-tramersiz-814772557/detay" title="Bmw Z4 3.0 Otomatik Super Sport Kazasız Değişensiz Tramersiz">
                        <img alt="Bmw Z4 3.0 Otomatik Super Sport Kazasız Değişensiz Tramersiz" src="https://via.placeholder.com/100x75" srcset="https://via.placeholder.com/100x75 1x, https://via.placeholder.com/100x75 2x"/>
                        <span>{{ Arr::random($array) }}</span>
                    </a>
                </li>
        @endfor

        </ul>
</div>
<!-- Homepage Showcase -->

                    <div class="center-banner">
                        <script type="text/javascript">

                            getBanner(120,'&amp;CATEGORY_ID=0&amp;PARENT_ID=0&amp;PAGE_NAME=ana_sayfa&amp;c=0&amp;c2=0&amp;LANGUAGE='+'tr');
                        </script>

                        <!-- /32607536/anasayfa728x90 -->
                        <div id='div-gpt-ad-1446829212361-0' style='height:90px; width:728px;'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function() {
                                    googletag.pubads().setTargeting("language", "tr");
                                    googletag.defineSlot('/32607536/anasayfa728x90', [728, 90], 'div-gpt-ad-1446829212361-0').addService(googletag.pubads());
                                    googletag.display('div-gpt-ad-1446829212361-0');
                                });
                            </script>
                        </div>
                    </div>
                    <!-- Sahibinden Center Banner -->

                    <div class="uiBox">
    <h3>
        <small>
            <a href="projeler/" title="Tüm Projeleri göster">Tüm Projeleri göster</a>
        </small>
        Projeler</h3>
    <div class="estate-projects clearfix">
        <div class="projects" data-id="3699">
                <a title="AND Pastel" href="/projeler/p/and-gayrimenkul/and-pastel-kartal/">
                    <img title="AND Pastel" alt="AND Pastel" src="https://s0.shbdn.com/projeler/media/photos/Project/2016/06/6cb1af77a3549542/Self/0f15d45ce3d186d3.jpg">
                </a>
                <h4>
                    <a title="AND Pastel" href="/projeler/p/and-gayrimenkul/and-pastel-kartal/">
                        AND Pastel<span> (İstanbul / Kartal)</span>
                    </a>
                </h4>
                <p class="m2">
                    <strong>m<sup>2</sup></strong>: 67 m<sup>2</sup> - 256 m<sup>2</sup></p>
                <p class="due-date">
                    <strong>Teslim Tarihi</strong>: HemenTeslim</p>
            </div>
        <div class="projects" data-id="4005">
                <a title="Referans Ankara" href="/projeler/p/sf-yildiz-gayrimenkul-insaat/referans-ankara-etimesgut/">
                    <img title="Referans Ankara" alt="Referans Ankara" src="https://s0.shbdn.com/projeler/media/photos/Project/2020/04/dd4caaf3e25495ac/Self/9569d39111dcc361.jpg">
                </a>
                <h4>
                    <a title="Referans Ankara" href="/projeler/p/sf-yildiz-gayrimenkul-insaat/referans-ankara-etimesgut/">
                        Referans Ankara<span> (Ankara / Etimesgut)</span>
                    </a>
                </h4>
                <p class="m2">
                    <strong>m<sup>2</sup></strong>: 71 m<sup>2</sup> - 116 m<sup>2</sup></p>
                <p class="due-date">
                    <strong>Teslim Tarihi</strong>: Aralık 2021</p>
            </div>
        </div>
</div>
<!-- Real Estate Projects -->

                    <div class="uiBox daily-opportunity-slide">
    <h3>
        <small>
            <a class="trackLinkClick trackId_GF_Show_All" href="/gunun-firsati" title="Tüm Fırsatları  Göster">Tüm Fırsatları  Göster</a>
        </small>
        Günün Fırsatı Ürünleri</h3>
    <div class="daily-opportunity-slide-container">
        <div class="daily-opportunity-content">
            <ul>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-elektrikli-ev-aletleri-beyaz-esya-spring-saf-su-uretim-cihazi-gunde-5-ton-saf-su-ssuc-01-810231723/detay" title="Spring Saf Su Üretim Cihazı - Günde 5 Ton Saf Su - SSUC-01">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    9</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/23/17/23/lthmb_810231723g8o.jpg"
                                alt="Spring Saf Su Üretim Cihazı - Günde 5 Ton Saf Su - SSUC-01"
                                title="Spring Saf Su Üretim Cihazı - Günde 5 Ton Saf Su - SSUC-01">
                            <span class="daily-opportunity-title">
                                <span>Spring Saf Su Üretim Cihazı - Günde 5 Ton Saf Su - SSUC-01</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 20.000 TL<span class="old-price">
                                     22.000 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-bahce-yapi-market-bahce-orgulu-bahce-hortumu-ic-capi-12%2C5-militre-1-2inc-10-metre-812288849/detay" title="örgülü Bahçe Hortumu iç çapı 12,5 militre 1/2inç 10 metre">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    31</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/28/88/49/lthmb_812288849npk.jpg"
                                alt="örgülü Bahçe Hortumu iç çapı 12,5 militre 1/2inç 10 metre"
                                title="örgülü Bahçe Hortumu iç çapı 12,5 militre 1/2inç 10 metre">
                            <span class="daily-opportunity-title">
                                <span>örgülü Bahçe Hortumu iç çapı 12,5 militre 1/2inç 10 metre</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 36 TL<span class="old-price">
                                     52 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-elektrikli-ev-aletleri-beyaz-esya-spring-water-vaha-9-asamali-su-aritma-cihazi-810223885/detay" title="Spring Water Vaha 9 Aşamalı Su Arıtma Cihazı">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    9</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/22/38/85/lthmb_8102238853ce.jpg"
                                alt="Spring Water Vaha 9 Aşamalı Su Arıtma Cihazı"
                                title="Spring Water Vaha 9 Aşamalı Su Arıtma Cihazı">
                            <span class="daily-opportunity-title">
                                <span>Spring Water Vaha 9 Aşamalı Su Arıtma Cihazı</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 1.250 TL<span class="old-price">
                                     1.375 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-elektrikli-ev-aletleri-beyaz-esya-spring-water-8-li-filtre-seti-11-asamali-modeller-icin-809815982/detay" title="Spring Water 8 li Filtre Seti ( 11 Aşamalı Modeller için )">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    22</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/81/59/82/lthmb_8098159828jj.jpg"
                                alt="Spring Water 8 li Filtre Seti ( 11 Aşamalı Modeller için )"
                                title="Spring Water 8 li Filtre Seti ( 11 Aşamalı Modeller için )">
                            <span class="daily-opportunity-title">
                                <span>Spring Water 8 li Filtre Seti ( 11 Aşamalı Modeller için )</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 350 TL<span class="old-price">
                                     450 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-bahce-yapi-market-bahce-30-metre-1-2inc-bahce-hortumu-orgulu-sulama-hortumu-812292416/detay" title="30 metre 1/2inç bahçe hortumu örgülü sulama hortumu">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    35</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/29/24/16/lthmb_812292416tg5.jpg"
                                alt="30 metre 1/2inç bahçe hortumu örgülü sulama hortumu"
                                title="30 metre 1/2inç bahçe hortumu örgülü sulama hortumu">
                            <span class="daily-opportunity-title">
                                <span>30 metre 1/2inç bahçe hortumu örgülü sulama hortumu</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 81 TL<span class="old-price">
                                     125 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-elektrikli-ev-aletleri-beyaz-esya-lg-membranli-11-asamali-su-aritma-cihazi-2-yil-garanti-812354648/detay" title="LG Membranlı 11 Aşamalı Su Arıtma Cihazı 2 Yıl Garanti,">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    14</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/35/46/48/lthmb_812354648thu.jpg"
                                alt="LG Membranlı 11 Aşamalı Su Arıtma Cihazı 2 Yıl Garanti,"
                                title="LG Membranlı 11 Aşamalı Su Arıtma Cihazı 2 Yıl Garanti,">
                            <span class="daily-opportunity-title">
                                <span>LG Membranlı 11 Aşamalı Su Arıtma Cihazı 2 Yıl Garanti,</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 1.500 TL<span class="old-price">
                                     1.750 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-bahce-yapi-market-bahce-1-2-inc-yarim-parmak-orgulu-bahce-hortumu-10-metre-fiyatidir-810289270/detay" title="1/2 inç yarim parmak örgülü bahçe hortumu 10 metre fiyatıdır">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    40</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/28/92/70/lthmb_810289270mjz.jpg"
                                alt="1/2 inç yarim parmak örgülü bahçe hortumu 10 metre fiyatıdır"
                                title="1/2 inç yarim parmak örgülü bahçe hortumu 10 metre fiyatıdır">
                            <span class="daily-opportunity-title">
                                <span>1/2 inç yarim parmak örgülü bahçe hortumu 10 metre fiyatıdır</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 45 TL<span class="old-price">
                                     75 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-bahce-yapi-market-bahce-bahce-hortumu-yarim-parmak-30-metre-ic-capi-12%2C5milimetre-810293250/detay" title="Bahçe hortumu yarım parmak 30 metre iç çapı 12,5milimetre">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    34</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/29/32/50/lthmb_810293250kuw.jpg"
                                alt="Bahçe hortumu yarım parmak 30 metre iç çapı 12,5milimetre"
                                title="Bahçe hortumu yarım parmak 30 metre iç çapı 12,5milimetre">
                            <span class="daily-opportunity-title">
                                <span>Bahçe hortumu yarım parmak 30 metre iç çapı 12,5milimetre</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 80 TL<span class="old-price">
                                     122 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-elektrikli-ev-aletleri-beyaz-esya-spring-ultraviyole-uv-filtreli-10-asamali-su-aritma-cihazi-812603172/detay" title="Spring Ultraviyole (UV) Filtreli 10 Aşamalı Su Arıtma Cihazı">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    9</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/60/31/72/lthmb_812603172hib.jpg"
                                alt="Spring Ultraviyole (UV) Filtreli 10 Aşamalı Su Arıtma Cihazı"
                                title="Spring Ultraviyole (UV) Filtreli 10 Aşamalı Su Arıtma Cihazı">
                            <span class="daily-opportunity-title">
                                <span>Spring Ultraviyole (UV) Filtreli 10 Aşamalı Su Arıtma Cihazı</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 2.000 TL<span class="old-price">
                                     2.200 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-elektrikli-ev-aletleri-beyaz-esya-aquante-saf-su-uretim-cihazi-gunde-250-litre-810232945/detay" title="Aquante Saf Su Üretim Cihazı - Günde 250 Litre">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    9</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/23/29/45/lthmb_8102329450j4.jpg"
                                alt="Aquante Saf Su Üretim Cihazı - Günde 250 Litre"
                                title="Aquante Saf Su Üretim Cihazı - Günde 250 Litre">
                            <span class="daily-opportunity-title">
                                <span>Aquante Saf Su Üretim Cihazı - Günde 250 Litre</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 12.000 TL<span class="old-price">
                                     13.200 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-kisisel-bakim-kozmetik-vucut-bakim-kabak-lifi-kabak-kese-banyo-lifi-dus-kesesi-dus-kesesi-peeling-812274121/detay" title="Kabak Lifi Kabak Kese Banyo Lifi Duş Kesesi Duş Kesesi Peeling .">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    49</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/27/41/21/lthmb_812274121km8.jpg"
                                alt="Kabak Lifi Kabak Kese Banyo Lifi Duş Kesesi Duş Kesesi Peeling ."
                                title="Kabak Lifi Kabak Kese Banyo Lifi Duş Kesesi Duş Kesesi Peeling .">
                            <span class="daily-opportunity-title">
                                <span>Kabak Lifi Kabak Kese Banyo Lifi Duş Kesesi Duş Kesesi Peeling .</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 39,<sup>99</sup> TL<span class="old-price">
                                     79 TL</span>
                            </span>
                        </a>
                    </li>
                <li>
                        <a class="trackLinkClick trackId_GF" href="/ilan/ikinci-el-ve-sifir-alisveris-elektrikli-ev-aletleri-beyaz-esya-aquante-saf-su-uretim-cihazi-gunde-250-litre-810228372/detay" title="Aquante Saf Su Üretim Cihazı - Günde 250 Litre">
                            <span class="dailyOpportunityCargo">
                                    <span class="dailyOpportunityCargoText">ücretsiz kargo</span>
                                </span>
                            <span class="dailyOpportunityDiscount">
                                <span>%</span>
                                <span class="dailyOpportunityDiscountRate">
                                    9</span>
                                <span class="dailyOpportunityDiscountText">indirim</span>
                            </span>
                            <img src="https://i0.shbdn.com/photos/22/83/72/lthmb_81022837230h.jpg"
                                alt="Aquante Saf Su Üretim Cihazı - Günde 250 Litre"
                                title="Aquante Saf Su Üretim Cihazı - Günde 250 Litre">
                            <span class="daily-opportunity-title">
                                <span>Aquante Saf Su Üretim Cihazı - Günde 250 Litre</span>
                            </span>
                            <span class="daily-opportunity-price">
                                 3.499 TL<span class="old-price">
                                     3.850 TL</span>
                            </span>
                        </a>
                    </li>
                </ul>
        </div>
    </div>
    <a class="daily-opportunity-prev-button" id="dailyOpportunityPrevButton"></a>
    <a class="daily-opportunity-next-button" id="dailyOpportunityNextButton"></a>
</div>
<!-- Daily Opportunity -->

                    <div class="uiBox interesting-ads" >
    <h3>
        <small><a href="https://www.sahibinden.com/ilginc-ilanlar" title="Tüm ilginç ilanları göster">Tüm ilginç ilanları göster</a></small>
        İlginç İlanlar</h3>

    <ul id="interestingAds">
        <li>
                <a title="TÜRKİYE'DE TEK SEYYAR FIRIN"
                   href="/ilan/ikinci-el-ve-sifir-alisveris-bahce-yapi-market-bahce-turkiye-de-tek-seyyar-firin-288708704/detay">
                    <img alt="TÜRKİYE'DE TEK SEYYAR FIRIN" title="TÜRKİYE'DE TEK SEYYAR FIRIN"
                        src="https://i0.shbdn.com/photos/70/87/04/thmb_288708704m19.jpg"/>
                    <span>TÜRKİYE&#039;DE TEK SEYYAR FIRIN</span>
                </a>
            </li>
        <li>
                <a title="Ters paketlenmiş eti cin"
                   href="/ilan/ikinci-el-ve-sifir-alisveris-diger-her-sey-sira-disi-urunler-ters-paketlenmis-eti-cin-709330875/detay">
                    <img alt="Ters paketlenmiş eti cin" title="Ters paketlenmiş eti cin"
                        src="https://i0.shbdn.com/photos/33/08/75/thmb_70933087579r.jpg"/>
                    <span>Ters paketlenmiş eti cin</span>
                </a>
            </li>
        <li>
                <a title="Şampiyonluk Garantili Kendinden Totemli Ev"
                   href="/ilan/emlak-konut-satilik-sampiyonluk-garantili-kendinden-totemli-ev-338644414/detay">
                    <img alt="Şampiyonluk Garantili Kendinden Totemli Ev" title="Şampiyonluk Garantili Kendinden Totemli Ev"
                        src="https://i0.shbdn.com/photos/64/44/14/thmb_338644414txx.jpg"/>
                    <span>Şampiyonluk Garantili Kendinden Totemli Ev</span>
                </a>
            </li>
        <li>
                <a title="2020 KIDEMLİ SİLİKON MASKE TÜRKİYE'DE BİR İLK. VİDEO EKLENMİŞTİR"
                   href="/ilan/ikinci-el-ve-sifir-alisveris-diger-her-sey-diger-2020-kidemli-silikon-maske-turkiye-de-bir-ilk-video-eklenmistir-343372565/detay">
                    <img alt="2020 KIDEMLİ SİLİKON MASKE TÜRKİYE'DE BİR İLK. VİDEO EKLENMİŞTİR" title="2020 KIDEMLİ SİLİKON MASKE TÜRKİYE'DE BİR İLK. VİDEO EKLENMİŞTİR"
                        src="https://i0.shbdn.com/photos/37/25/65/thmb_343372565wsf.jpg"/>
                    <span>2020 KIDEMLİ SİLİKON MASKE TÜRKİYE&#039;DE BİR İLK. VİDEO EKLENMİŞTİR</span>
                </a>
            </li>
        <li>
                <a title="1300 adet telefon sıfır yada cok az kullanılmış"
                   href="/ilan/ikinci-el-ve-sifir-alisveris-cep-telefonu-modeller-1300-adet-telefon-sifir-yada-cok-az-kullanilmis-390900711/detay">
                    <img alt="1300 adet telefon sıfır yada cok az kullanılmış" title="1300 adet telefon sıfır yada cok az kullanılmış"
                        src="https://i0.shbdn.com/photos/90/07/11/thmb_39090071101f.jpg"/>
                    <span>1300 adet telefon sıfır yada cok az kullanılmış</span>
                </a>
            </li>
        <li>
                <a title="Koleksiyonluk, Boş Paketlenmiş Haribo Paketi"
                   href="/ilan/ikinci-el-ve-sifir-alisveris-diger-her-sey-sira-disi-urunler-koleksiyonluk-bos-paketlenmis-haribo-paketi-767006027/detay">
                    <img alt="Koleksiyonluk, Boş Paketlenmiş Haribo Paketi" title="Koleksiyonluk, Boş Paketlenmiş Haribo Paketi"
                        src="https://i0.shbdn.com/photos/00/60/27/thmb_767006027m7d.jpg"/>
                    <span>Koleksiyonluk, Boş Paketlenmiş Haribo Paketi</span>
                </a>
            </li>
        <li>
                <a title="ÖZEL YAPIM BİR EŞİ DAHA YOK"
                   href="/ilan/vasita-klasik-araclar-klasik-otomobiller-ozel-yapim-bir-esi-daha-yok-691935545/detay">
                    <img alt="ÖZEL YAPIM BİR EŞİ DAHA YOK" title="ÖZEL YAPIM BİR EŞİ DAHA YOK"
                        src="https://i0.shbdn.com/photos/93/55/45/thmb_691935545z55.jpg"/>
                    <span>ÖZEL YAPIM BİR EŞİ DAHA YOK</span>
                </a>
            </li>
        </ul>
</div>
<!-- Interesting Classifieds -->

                    <div class="uiBox popular-products">
                        <h3>Popüler Ürünler</h3>

                        <div id='div-gpt-ad-9589712-2'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function () {
                                    googletag.pubads().setTargeting("language", "tr");
                                    googletag.defineSlot('/32607536/mainpage_populer_urunler', [[835,150]], 'div-gpt-ad-9589712-2').addService(googletag.pubads());
                                    googletag.display('div-gpt-ad-9589712-2');
                                });
                            </script>
                        </div>
                    </div>
                    <!-- Popular Products -->

                    <div id="div-gpt-ad-1526475307026-1" class="banner-left">
    <script type="text/javascript">
        var isMastheadEnabled = true;
        var isMastheadPreview = location.href.indexOf('?google_preview=') != -1||location.href.indexOf('&google_preview=') != -1;
        if(isMastheadEnabled||isMastheadPreview){
            googletag.cmd.push(function() {
                googletag.defineSlot('/32607536/mainpage_midcenter_w', [522, 250], 'div-gpt-ad-1526475307026-1').addService(googletag.pubads());
                googletag.pubads().enableSingleRequest();
                googletag.enableServices();
                googletag.display('div-gpt-ad-1526475307026-1');
            });
        }else {
            document.getElementById("div-gpt-ad-1526475307026-1").style.display='none';
        }
    </script>
</div>

<!-- Banner Right -->
<div id='div-gpt-ad-1526475307026-0' class="banner-right">
    <script type="text/javascript">
        if(isMastheadEnabled||isMastheadPreview){
            googletag.cmd.push(function() {
                googletag.defineSlot('/32607536/mainpage_midright', [300, 250], 'div-gpt-ad-1526475307026-0').addService(googletag.pubads());
                googletag.pubads().enableSingleRequest();
                googletag.enableServices();
                googletag.display('div-gpt-ad-1526475307026-0');
            });
        }else {
            document.getElementById("div-gpt-ad-1526475307026-0").style.display='none';
        }
    </script>
</div>
<!-- Banner Right --><div class="uiBox most">
                        <h3>Popüler Aramalar</h3>
                        <ul class="popular-links vitrin-list clearfix">
	<li><a target="_self" href="https://www.sahibinden.com/ikinci-el-ve-sifir-alisveris 
" title="ikinci el 
">İkinci el</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/cep-telefonu-modeller-apple-iphone-11-pro-max
" title="iphone 11 pro max
">iPhone 11 Pro Max</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/cep-telefonu-modeller-apple-iphone-11-pro
" title="iphone 11 pro
">iPhone 11 Pro</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/cep-telefonu-modeller-xiaomi-redmi-note-7
" title="redmi note 7
">Redmi Note 7</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/cep-telefonu-giyilebilir-teknoloji-akilli-saat-apple-watch?a106535=1239736
" title="apple watch s5">Apple Watch S5</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/cep-telefonu-modeller-huawei-p30-lite 
" title="p30 lite">P30 Lite</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/otomobil/ikinci-el
" title="ikinci el araba">İkinci El Araba</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/hobi-oyuncak-rc-araclar-drone?a107414=1212141
" title="dji drone">DJI Drone</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/anne-bebek-bebek-arabasi-puset
" title="bebek arabası">Bebek Arabası</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/otomotiv-ekipmanlari-jant-lastik-lastik
" title="lastik fiyatları">Lastik Fiyatları</a></li>
</ul>
</div>
                    <div class="uiBox most">
                        <h3>Sıfır Araçlar Dünyası</h3>
                        <ul class="popular-links vitrin-list clearfix">
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/renault" title="Renault">Renault</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/fiat" title="Fiat">Fiat</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/honda" title="Honda">Honda</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/hyundai" title="Hyundai">Hyundai</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/audi" title="Audi">Audi</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/mercedes-benz" title="Mercedes - Benz">Mercedes - Benz</a></li>
<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/ford" title="Ford">Ford</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/citroen" title="Citroën">Citroën</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/bmw" title="BMW">BMW</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto360/sifir-araclar/volkswagen" title="Volkswagen">Volkswagen</a></li>
	</ul></div>
                    <!-- Popular Search -->
                    <div class="uiBox most">
                        <h3>En Çok Aranan Hizmetler</h3>
                        <ul class="popular-links vitrin-list clearfix">
	<li><a target="_self" href="https://www.sahibinden.com/boyaci-hizmetleri 
" title="Boyacı 
">Boyacı</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/evden-eve-nakliyat-hizmetleri
" title="Evden Eve Nakliye
">Evden Eve Nakliye</a></li>
	<li><a target="_self" href=" https://www.sahibinden.com/yalitim-mantolama-hizmetleri
" title="Mantolama
">Mantolama</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/su-tesisati-hizmetleri
" title="Su Tesisatı
">Su Tesisatı</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/dogalgaz-tesisati-hizmetleri
" title="Doğal Gaz Tesisatı">Doğal Gaz Tesisatı</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto-kaporta-boya-hizmetleri 
" title="Oto Boya">Oto Boya</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto-tamir-servis-hizmetleri 
" title="Oto Tamiri">Oto Tamiri</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/elektrikci-hizmetleri
" title="Elektrikçi">Elektrikçi</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/cilingir-hizmetleri 
" title="Çilingir">Çilingir</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/oto-plaka-hizmetleri 
" title="Plaka">Plaka</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/zemin-kaplama-hizmetleri
" title="Parke">Parke</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/banyo-mutfak-dekorasyonu-hizmetleri
" title="Mutfak Yenileme">Mutfak Yenileme</a></li>
</ul>
</div>
                    
                    <div class="uiBox most">
                        <h3>En Çok Aranan İş İlanları</h3>
                        <ul class="popular-links vitrin-list clearfix">
	<li><a target="_self" href="https://www.sahibinden.com/restoran-ve-konaklama-is-ilanlari 
" title="Restoran ve Konaklama İş İlanları 
">Restoran ve Konaklama</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/magazacilik-ve-perakendecilik-is-ilanlari
" title="Mağaza ve Perakendecilik İş İlanları
">Mağaza ve Perakendecilik</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/tekstil-ve-konfeksiyon-is-ilanlari
" title="Tekstil ve Konfeksiyon İş İlanları
">Tekstil ve Konfeksiyon</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/ofis-yonetimi-ve-idari-isler-is-ilanlari
" title="Ofis Elemanı
">Ofis Elemanı</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/satis-is-ilanlari 
" title="Satış İş İlanları">Satış</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/musteri-hizmetleri-is-ilanlari 
" title="Müşteri Hizmetleri İş İlanları">Müşteri Hizmetleri</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/is-ilanlari/istanbul 
" title="İstanbul İş İlanları">İstanbul İş İlanları</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/is-ilanlari/ankara 
" title="Ankara İş İlanları">Ankara İş İlanları</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/is-ilanlari/izmir 
" title="İzmir İş İlanları">İzmir İş İlanları</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/is-ilanlari/adana 
" title="Adana İş İlanları">Adana İş İlanları</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/is-ilanlari/bursa 
" title="Bursa İş İlanları">Bursa İş İlanları</a></li>
	<li><a target="_self" href="https://www.sahibinden.com/is-ilanlari/antalya 
" title="Antalya İş İlanları">Antalya İş İlanları</a></li>
</ul>
</div>
                </div>
            <!-- .homepage-content -->

        </div>
        <!-- .content -->
    </div>

    <script type="text/html" id="browserUpdateTemplate">
        <div id="topMessageContainer">
            <div id="browserUpdate" class="topMessage">
                <a href="" id="browserUpdateClose" class="browser-update-close">Kapat</a>
                <p><strong>Internet Explorer tarayıcısının 9.0 ve daha eski sürümlerini desteklememekteyiz. </strong>sahibinden.com’ u doğru görüntüleyebilmek tarayıcınızı güncelleyebilirsiniz,<br />güncelleyemiyorsanız başka bir tarayıcıyı <span>ücretsiz</span> yükleyebilirsiniz.</p><ul>
                    <li>
                        <a class="browser-ie" href="http://windows.microsoft.com/en-US/windows/downloads/internet-explorer">
                            <span>Internet Explorer</span>
                        </a>
                    </li>
                    <li>
                        <a class="browser-firefox" href="http://getfirefox.com/">
                            <span>Firefox</span>
                        </a>
                    </li>
                    <li>
                        <a class="browser-chrome" href="http://www.google.com/chrome/">
                            <span>Google Chrome</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </script>
    <!-- Browser Support Information Script - This Method is for Google -->

</div>

<div class="footerContainer footer-container ">
<div class="footer phdef pvdef clearfix">
    <ul class="footerMenu footer-menu">
        <li>
            <h2>Kurumsal</h2>
            <ul>
                <li>
                    <a href="https://www.sahibinden.com/kurumsal/hakkimizda/" title="Hakkımızda">
                        Hakkımızda</a>
                </li>
                <li>
                    <a href="https://insankaynaklari.sahibinden.com/" title="İnsan Kaynakları">
                        İnsan Kaynakları</a>
                </li>
                <li>
                    <a href="/kurumsal/haberler/" title="Haberler">
                        Haberler</a>
                </li>
                <li>
                    <a rel="nofollow no-follow" href="https://www.sahibinden.com/kurumsal/iletisim/" title="İletişim">
                        İletişim</a>
                </li>
            </ul>
        </li>
        <li>
            <h2>Hizmetlerimiz</h2>
            <ul>
                <li>
                    <a href="https://www.sahibinden.com/doping-tanitim/" title="Doping">
                        Doping</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/guvenli-e-ticaret" title="Güvenli e-Ticaret (GeT)">
                        Güvenli e-Ticaret (GeT)</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/toplu-urun-girisi" title="Toplu Ürün Girişi">
                        Toplu Ürün Girişi</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/reklam/" title="Reklam">
                        Reklam</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/sahibinden-dogal-reklam/" title="sahibinden Doğal Reklam">
                        sahibinden Doğal Reklam</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/mobil" title="Mobil">
                        Mobil</a>
                </li>
            </ul>
        </li>
        <li>
            <h2>Mağazalar</h2>
            <ul>
                <li>
                    <a href="https://banaozel.sahibinden.com/magazam" title="Mağazam">
                        Mağazam</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/magaza-kategori-secimi" title="Mağaza Açmak İstiyorum">
                        Mağaza Açmak İstiyorum</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/neden-magaza" title="Neden Mağaza?">
                        Neden Mağaza?</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/magaza-fiyatlari" title="Maliyeti Nedir?">
                        Maliyeti Nedir?</a>
                </li>
            </ul>
        </li>
        <li>
            <h2>Gizlilik ve Kullanım</h2>
            <ul>
                <li>
                    <a href="https://www.sahibinden.com/guvenli-alisverisin-ipuclari/" title="Güvenli Alışverişin İpuçları">
                        Güvenli Alışverişin İpuçları</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/sozlesmeler/" title="Sözleşmeler ve Kurallar">
                        Sözleşmeler ve Kurallar</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/sozlesmeler/bireysel-uyelik-sozlesmesi-0" title="Üyelik Sözleşmesi">
                        Üyelik Sözleşmesi</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/sozlesmeler/kullanim-kosullari-35" title="Kullanım Koşulları">
                        Kullanım Koşulları</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/site-haritasi" title="Site Haritası">
                        Site Haritası</a>
                </li>
                <li>
                    <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-58" title="Kişisel Verilerin Korunması">
                        Kişisel Verilerin Korunması</a>
                </li>
                <li>
                    <a href="https://yardim.sahibinden.com/hc/tr" title="Yardım ve İşlem Rehberi">
                        Yardım ve İşlem Rehberi</a>
                </li>
            </ul>
        </li>
        <li class="followUs follow-us">
            <h2>Bizi Takip Edin</h2>
            <ul>
                <li>
                    <a title="Facebook" target="_blank"
                       href="https://www.facebook.com/sahibindencom">Facebook</a>
                </li>
                <li>
                    <a title="Twitter" target="_blank"
                       href="https://www.twitter.com/sahibindencom">Twitter</a>
                </li>
                <li>
                    <a title="Linkedin" target="_blank"
                       href="https://www.linkedin.com/company/sahibinden-com">Linkedin</a>
                </li>
                <li>
                    <a title="Instagram" target="_blank"
                       href="https://www.instagram.com/sahibindencom/">Instagram</a>
                </li>
                <li>
                    <a title="Youtube" target="_blank"
                       href="https://www.youtube.com/user/sahibindencom">Youtube</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="clearfix">
        <ul class="contact-menu">
            <li class="call-center">
                <p>7/24 Müşteri Hizmetleri</p>
                <span>0 850 222 44 44</span>
            </li>
            <li class="help-center">
                <p>Yardım Merkezi</p>
                <a href="https://yardim.sahibinden.com/hc/tr" title="yardim.sahibinden.com">yardim.sahibinden.com</a>
            </li>
            <li class="store-logos">
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.sahibinden" class="store-logo googleplay" title="sahibinden.com"></a><a target="_blank" href="https://itunes.apple.com/tr/app/sahibinden.com-mobil/id418535251?mt=8" class="store-logo apple" title="sahibinden.com"></a>
            </li>
            <li>
                <a target="_blank" href="https://www.guvendamgasi.org.tr/firmadetay.php?Guid=25680f1d-270b-11ea-991b-48df373f4850" class="security-sign"></a>
            </li>
        </ul>
    </div>

    <p class="warningText warning-text">
        sahibinden.com'da yer alan kullanıcıların oluşturduğu tüm içerik, görüş ve bilgilerin doğruluğu, eksiksiz ve değişmez olduğu, yayınlanması ile ilgili yasal yükümlülükler içeriği oluşturan kullanıcıya aittir. Bu içeriğin, görüş ve bilgilerin yanlışlık, eksiklik veya yasalarla düzenlenmiş kurallara aykırılığından sahibinden.com hiçbir şekilde sorumlu değildir. Sorularınız için ilan sahibi ile irtibata geçebilirsiniz. <br /> Yer Sağlayıcı Belge No : 581</p>

    <div class="postClassifiedFreeText post-classified-free-text">
        <p class="freeClassifiedLimitNotice">(*) Bireysel üyeler için, limitli adetlerde, belirli kategorilerde ve belirli kampanyalarda</p>
        <a rel="nofollow" href="/en" title="English" class="language-selection-link ">
                    English</a>
            </div>
    <ul class="mobil footer-nav disable">
        <li><a href="/" title="Anasayfa">Anasayfa</a></li>
        <li><a href="" title="Masaüstü Görünüm">Masaüstü Görünüm</a></li>
    </ul>
    <p class="copyright mobil">
        Copyright © 2000-2020 sahibinden.com</p>
</div>
</div>
<script id="gaPageViewTrackingData" type="text/javascript">
        var pageTrackData = {"trackPageview":[],"customVars":[{"index":1,"name":"site_preference","value":"desktop","scope":2}],"trackEvent":[],"dmpData":[],"transactionObject":null,"transactionUserItem":null,"trackCurrentPage":true,"dc":"gayrettepe","homepageDesign":null,"route":"homepage","view":"homepage","viewName":"/","query":"","categories":[],"locations":[],"classified":null,"searchResult":null,"storeSubdomain":null,"successfulPaymentWithSavedCC":false};
    </script>
    <div id="gaPageViewTrackingJson" data-json="{&quot;trackPageview&quot;:[],&quot;customVars&quot;:[{&quot;index&quot;:1,&quot;name&quot;:&quot;site_preference&quot;,&quot;value&quot;:&quot;desktop&quot;,&quot;scope&quot;:2}],&quot;trackEvent&quot;:[],&quot;dmpData&quot;:[],&quot;transactionObject&quot;:null,&quot;transactionUserItem&quot;:null,&quot;trackCurrentPage&quot;:true,&quot;dc&quot;:&quot;gayrettepe&quot;,&quot;homepageDesign&quot;:null,&quot;route&quot;:&quot;homepage&quot;,&quot;view&quot;:&quot;homepage&quot;,&quot;viewName&quot;:&quot;/&quot;,&quot;query&quot;:&quot;&quot;,&quot;categories&quot;:[],&quot;locations&quot;:[],&quot;classified&quot;:null,&quot;searchResult&quot;:null,&quot;storeSubdomain&quot;:null,&quot;successfulPaymentWithSavedCC&quot;:false}"></div>
<script type="text/javascript">
    (function () {
        var cookiestring = RegExp("vid=[^;]+").exec(document.cookie),
                vid = ~~(unescape(!!cookiestring ? cookiestring.toString().replace(/^[^=]+/, "").replace("=", "") : "")),
                v = (29 < vid && vid < 40) ? 'Test' : '',
                t = parseInt(new Date().getTime() / 1000 / 60 / 30),
                an = document.createElement('script'),
                scr = document.getElementsByTagName('script')[0];

        an.type = 'text/javascript';
        an.async = true;
        an.src = 'https://static.sahibinden.com/assets/analytics' + v + ':1.js?t=' + t;
        scr.parentNode.insertBefore(an, scr);
    })();
</script>
<script type="text/javascript">
    var pp_gemius_identifier = 'bPeQ_0eeWvPc3Iqa7jJQEcUGjy2NXYOoUvs1RDjCPDH.v7',
        initial_pp_gemius_identifier = 'bPeQ_0eeWvPc3Iqa7jJQEcUGjy2NXYOoUvs1RDjCPDH.v7';
</script>
<!-- asset manager injected js [prebid] -->
<script src="https://s0.shbdn.com/assets/prebid:1cb6efb1bdb3f2e426be9ab7cf4cc300.js" type="text/javascript" async> </script>
<!-- asset manager injected js [gemius] -->
<script src="https://s0.shbdn.com/assets/gemius:fe0a55a10380725904fad1feea2c7ef3.js" type="text/javascript" async> </script>
<!-- asset manager injected js [prebid] -->
<script src="https://s0.shbdn.com/assets/prebid:1cb6efb1bdb3f2e426be9ab7cf4cc300.js" type="text/javascript" async> </script>
<!-- asset manager injected js [common] -->
<script src="https://s0.shbdn.com/assets/common:adb7065afca0cb604475bbb0e44bd335.js" type="text/javascript" > </script>
<!-- asset manager injected js [searchSuggestion] -->
<script src="https://s0.shbdn.com/assets/searchSuggestion:b51ba7575ddb3cbc7e4c9564e0ed2748.js" type="text/javascript" > </script>
<!-- asset manager injected js [homepage] -->
<script src="https://s0.shbdn.com/assets/homepage:65c4888d7f73fc52b7a9598ac15b4062.js" type="text/javascript" > </script>
<!-- asset manager injected js [lastScripts] -->
<script src="https://s0.shbdn.com/assets/lastScripts:cfa5d49129048f4e398f292f2accea2c.js" type="text/javascript" > </script>
<!-- layout -->
</body>
</html>
