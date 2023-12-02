<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{$service->name}} &#8211; Handymen To Call</title>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <!-- <link rel="alternate" type="application/rss+xml" title="Handymen To Call &raquo; Feed" href="https://handymentocall.com/feed/" /> -->
    <!-- <link rel="alternate" type="application/rss+xml" title="Handymen To Call &raquo; Comments Feed" href="https://handymentocall.com/comments/feed/" /> -->
    <!-- <script>
        window._wpemojiSettings = {
            baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            ext: ".png",
            svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            svgExt: ".svg",
            source: {
                concatemoji: "https:\/\/handymentocall.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.1",
            },
        };
        /*! This file is auto-generated */
        !(function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: new Date().valueOf(),
                    };
                    sessionStorage.setItem(o, JSON.stringify(t));
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                    e.fillText(t, 0, 0);
                var t = new Uint32Array(
                        e.getImageData(
                            0,
                            0,
                            e.canvas.width,
                            e.canvas.height
                        ).data
                    ),
                    r =
                    (e.clearRect(0, 0, e.canvas.width, e.canvas.height),
                        e.fillText(n, 0, 0),
                        new Uint32Array(
                            e.getImageData(
                                0,
                                0,
                                e.canvas.width,
                                e.canvas.height
                            ).data
                        ));
                return t.every(function(e, t) {
                    return e === r[t];
                });
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(
                                e,
                                "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
                                "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
                            ) ?
                            !1 :
                            !n(
                                e,
                                "\ud83c\uddfa\ud83c\uddf3",
                                "\ud83c\uddfa\u200b\ud83c\uddf3"
                            ) &&
                            !n(
                                e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(
                            e,
                            "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff"
                        );
                }
                return !1;
            }

            function f(e, t, n) {
                var r =
                    "undefined" != typeof WorkerGlobalScope &&
                    self instanceof WorkerGlobalScope ?
                    new OffscreenCanvas(300, 150) :
                    i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o =
                    ((a.textBaseline = "top"),
                        (a.font = "600 32px Arial"), {});
                return (
                    e.forEach(function(e) {
                        o[e] = t(a, e, n);
                    }),
                    o
                );
            }

            function t(e) {
                var t = i.createElement("script");
                (t.src = e), (t.defer = !0), i.head.appendChild(t);
            }
            "undefined" != typeof Promise &&
                ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = {
                        everything: !0,
                        everythingExceptFlag: !0
                    }),
                    (e = new Promise(function(e) {
                        i.addEventListener("DOMContentLoaded", e, {
                            once: !0
                        });
                    })),
                    new Promise(function(t) {
                        var n = (function() {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if (
                                    "object" == typeof e &&
                                    "number" == typeof e.timestamp &&
                                    new Date().valueOf() <
                                    e.timestamp + 604800 &&
                                    "object" == typeof e.supportTests
                                )
                                    return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if (
                                "undefined" != typeof Worker &&
                                "undefined" != typeof OffscreenCanvas &&
                                "undefined" != typeof URL &&
                                URL.createObjectURL &&
                                "undefined" != typeof Blob
                            )
                                try {
                                    var e =
                                        "postMessage(" +
                                        f.toString() +
                                        "(" + [
                                            JSON.stringify(s),
                                            u.toString(),
                                            p.toString(),
                                        ].join(",") +
                                        "));",
                                        r = new Blob([e], {
                                            type: "text/javascript",
                                        }),
                                        a = new Worker(URL.createObjectURL(r), {
                                            name: "wpTestEmojiSupports",
                                        });
                                    return void(a.onmessage = function(e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                    .then(function(e) {
                        for (var t in e)
                            (n.supports[t] = e[t]),
                            (n.supports.everything =
                                n.supports.everything && n.supports[t]),
                            "flag" !== t &&
                            (n.supports.everythingExceptFlag =
                                n.supports.everythingExceptFlag &&
                                n.supports[t]);
                        (n.supports.everythingExceptFlag =
                            n.supports.everythingExceptFlag &&
                            !n.supports.flag),
                        (n.DOMReady = !1),
                        (n.readyCallback = function() {
                            n.DOMReady = !0;
                        });
                    })
                    .then(function() {
                        return e;
                    })
                    .then(function() {
                        var e;
                        n.supports.everything ||
                            (n.readyCallback(),
                                (e = n.source || {}).concatemoji ?
                                t(e.concatemoji) :
                                e.wpemoji &&
                                e.twemoji &&
                                (t(e.twemoji), t(e.wpemoji)));
                    }));
        })((window, document), window._wpemojiSettings);
    </script> -->
    <style id="wp-emoji-styles-inline-css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id="classic-theme-styles-inline-css">
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }
    </style>
    <style id="global-styles-inline-css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
                6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="redux-extendify-styles-css" href="{{asset('service-assets/css/redux-framework-redux-core-assets-css-extendify-utilities.css')}}" media="all" />
    <link rel="stylesheet" id="contact-form-7-css" href="{{asset('service-assets/css/contact-form-7-includes-css-styles.css')}}" media="all" />
    <style id="woocommerce-inline-inline-css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="slick-css" href="{{asset('service-assets/css/woo-smart-quick-view-assets-libs-slick-slick.css')}}" media="all" />
    <link rel="stylesheet" id="perfect-scrollbar-css" href="{{asset('service-assets/css/woo-smart-quick-view-assets-libs-perfect-scrollbar-css-perfect-scrollbar.min.css')}}" media="all" />
    <link rel="stylesheet" id="perfect-scrollbar-wpc-css" href="{{asset('service-assets/css/woo-smart-quick-view-assets-libs-perfect-scrollbar-css-custom-theme.css')}}" media="all" />
    <link rel="stylesheet" id="magnific-popup-css" href="{{asset('service-assets/css/woo-smart-quick-view-assets-libs-magnific-popup-magnific-popup.css')}}" media="all" />
    <link rel="stylesheet" id="woosq-feather-css" href="{{asset('service-assets/css/woo-smart-quick-view-assets-libs-feather-feather.css')}}" media="all" />
    <link rel="stylesheet" id="woosq-frontend-css" href="{{asset('service-assets/css/woo-smart-quick-view-assets-css-frontend.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-icons-css" href="{{asset('service-assets/css/elementor-assets-lib-eicons-css-elementor-icons.min.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-frontend-css" href="{{asset('service-assets/css/elementor-assets-css-frontend-lite.min.css')}}" media="all" />
    <link rel="stylesheet" id="swiper-css" href="{{asset('service-assets/css/elementor-assets-lib-swiper-v8-css-swiper.min.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-post-7-css" href="{{asset('service-assets/css/elementor-css-post-7.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-global-css" href="{{asset('service-assets/css/elementor-css-global.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-post-3249-css" href="{{asset('service-assets/css/elementor-css-post-3249.css')}}" media="all" />
    <link rel="stylesheet" id="plumer-style-css" href="{{asset('service-assets/css/plumer-style.css')}}" media="all" />
    <link rel="stylesheet" id="plumer-fonts-css" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&#038;family=Roboto:wght@100;300;400;500;700&#038;display=swap" media="all" />
    <link rel="stylesheet" id="bootstrap-css" href="{{asset('service-assets/css/plumer-assets-css-bootstrap.min.css')}}" media="all" />
    <link rel="stylesheet" id="fontawesome-css" href="{{asset('service-assets/css/plumer-assets-css-fontawesome.min.css')}}" media="all" />
    <link rel="stylesheet" id="plumer-main-style-css" href="{{asset('service-assets/css/plumer-assets-css-style.css')}}" media="all" />
    <link rel="stylesheet" id="plumer-color-schemes-css" href="{{asset('service-assets/css/plumer-assets-css-color.schemes.css')}}" media="all" />
    <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.4.1" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script type="text/template" id="tmpl-variation-template">
        <div class="woocommerce-variation-description">data.variation.variation_description</div>
            <div class="woocommerce-variation-price">data.variation.price_html</div>
            <div class="woocommerce-variation-availability">data.variation.availability_html</div>
        </script>
    <script type="text/template" id="tmpl-unavailable-variation-template">
        <p>Sorry, this product is unavailable. Please choose a different combination.</p>
        </script>
    <!-- <script>
        /* <![CDATA[ */
        var rcewpp = {
            ajax_url: "https://handymentocall.com/wp-admin/admin-ajax.php",
            nonce: "758dd16bf1",
            home_url: "https://handymentocall.com/",
            settings_icon: "https://handymentocall.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings.png",
            settings_hover_icon: "https://handymentocall.com/wp-content/plugins/export-wp-page-to-static-html/admin/images/settings_hover.png",
        };
        /* ]]\> */
    </script> -->
    <script src="{{asset('service-assets/js/jquery-jquery.min.js')}}" id="jquery-core-js"></script>
    <script src="{{asset('service-assets/js/jquery-jquery-migrate.min.js')}}" id="jquery-migrate-js"></script>
    <script src="{{asset('service-assets/js/woocommerce-assets-js-jquery-blockui-jquery.blockUI.min.js')}}" id="jquery-blockui-js" data-wp-strategy="defer"></script>
    <!-- <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {
            ajax_url: "\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
            i18n_view_cart: "View cart",
            cart_url: "https:\/\/handymentocall.com\/?page_id=10",
            is_cart: "",
            cart_redirect_after_add: "no",
        };
    </script> -->
    <script src="{{asset('service-assets/js/woocommerce-assets-js-frontend-add-to-cart.min.js')}}" id="wc-add-to-cart-js" defer data-wp-strategy="defer"></script>
    <script src="{{asset('service-assets/js/woocommerce-assets-js-js-cookie-js.cookie.min.js')}}" id="js-cookie-js" defer data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {
            ajax_url: "\/wp-admin\/admin-ajax.php",
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
        };
    </script>
    <script src="{{asset('service-assets/js/woocommerce-assets-js-frontend-woocommerce.min.js')}}" id="woocommerce-js" defer data-wp-strategy="defer"></script>
    <script src="{{asset('service-assets/js/ee1-underscore.min.js')}}" id="underscore-js"></script>
    <script id="wp-util-js-extra">
        var _wpUtilSettings = {
            ajax: {
                url: "\/wp-admin\/admin-ajax.php"
            },
        };
    </script>
    <script src="{{asset('service-assets/js/k95-wp-util.min.js')}}" id="wp-util-js"></script>
    <!-- <link rel="https://api.w.org/" href="https://handymentocall.com/wp-json/" /> -->
    <!-- <link rel="alternate" type="application/json" href="https://handymentocall.com/wp-json/wp/v2/pages/3249" /> -->
    <!-- <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://handymentocall.com/xmlrpc.php?rsd" /> -->
    <meta name="generator" content="WordPress 6.4.1" />
    <meta name="generator" content="WooCommerce 8.3.1" />
    <!-- <link rel="canonical" href="https://handymentocall.com/electrical-services/" /> -->
    <!-- <link rel="shortlink" href="https://handymentocall.com/?p=3249" /> -->
    <!-- <link rel="alternate" type="application/json+oembed" href="https://handymentocall.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhandymentocall.com%2Felectrical-services%2F" /> -->
    <!-- <link rel="alternate" type="text/xml+oembed" href="https://handymentocall.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fhandymentocall.com%2Felectrical-services%2F&#038;format=xml" /> -->
    <meta name="generator" content="Redux 4.4.9" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-swap" />
    <link rel="icon" href="{{asset('service-assets/images/cropped-Untitled-2-1-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('service-assets/images/cropped-Untitled-2-1-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('service-assets/images/cropped-Untitled-2-1-180x180.png')}}" />
    <!-- <meta name="msapplication-TileImage" content="https://handymentocall.com/wp-content/uploads/2023/05/cropped-Untitled-2-1-270x270.png" /> -->
    <style id="wp-custom-css">
        .main-menu ul {
            align-content: center;
        }
    </style>
    <style id="plumer_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
        .breadcumb-wrapper {
            background-repeat: no-repeat;
            background-position: center center;
            background-image: url("{{asset('service-assets/images/breadcumb-bg.jpg')}}");
            background-size: cover;
        }

        .footer-copyright {
            background-color: #1b1b1b;
        }
    </style>
</head>

<body class="page-template-default page page-id-3249 wp-custom-logo wp-embed-responsive theme-plumer woocommerce-no-js elementor-default elementor-kit-7 elementor-page elementor-page-3249">
@include('partials._header')
    <!-- Page title 2 -->
    <div class="breadcumb-wrapper">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{$service->name}}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{ $service->category->name }} </li>
                    <li>{{$service->name}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End of Page title -->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="page-3249" class="post-3249 page type-page status-publish hentry page--item">
                        <div class="page--content clearfix">
                            <div data-elementor-type="wp-page" data-elementor-id="3249" class="elementor elementor-3249">
                                <section class="elementor-section elementor-top-section elementor-element elementor-element-54c8df6c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="54c8df6c" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64d251d9" data-id="64d251d9" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-2b2069f8 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="2b2069f8" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-19541d8b" data-id="19541d8b" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <div class="elementor-element elementor-element-676a7959 elementor-widget elementor-widget-image" data-id="676a7959" data-element_type="widget" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <style>
                                                                            /*! elementor - v3.17.0 - 08-11-2023 */
                                                                            .elementor-widget-image {
                                                                                text-align: center;
                                                                            }

                                                                            .elementor-widget-image a {
                                                                                display: inline-block;
                                                                            }

                                                                            .elementor-widget-image a img[src$=".svg"] {
                                                                                width: 48px;
                                                                            }

                                                                            .elementor-widget-image img {
                                                                                vertical-align: middle;
                                                                                display: inline-block;
                                                                            }
                                                                        </style>
                                                                        <img fetchpriority="high" decoding="async" width="793" height="451" src="{{ asset('users/services/' . $service->picture) }}" class="attachment-full size-full wp-image-3252" alt="" srcset="
                                                                                    {{ asset('users/services/' . $service->picture) }} 793w,
                                                                                    {{ asset('users/services/' . $service->picture) }} 300w,
                                                                                    {{ asset('users/services/' . $service->picture) }} 768w,
                                                                                    {{ asset('users/services/' . $service->picture) }} 600w
                                                                                " sizes="(max-width: 793px) 100vw, 793px" />
                                                                    </div>
                                                                </div>
                                                                @if(!is_null($service->features))
                                                                <div class="elementor-element elementor-element-548e8f6a elementor-widget elementor-widget-text-editor" data-id="548e8f6a" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <style>
                                                                            .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                                background-color: #69727d;
                                                                                color: #fff;
                                                                            }

                                                                            .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                                color: #69727d;
                                                                                border: 3px solid;
                                                                                background-color: transparent;
                                                                            }

                                                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                                margin-top: 8px;
                                                                            }

                                                                            .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                                width: 1em;
                                                                                height: 1em;
                                                                            }

                                                                            .elementor-widget-text-editor .elementor-drop-cap {
                                                                                float: left;
                                                                                text-align: center;
                                                                                line-height: 1;
                                                                                font-size: 50px;
                                                                            }

                                                                            .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                                display: inline-block;
                                                                            }
                                                                        </style>
                                                                        <div class="page-content">
                                                                            <h2 class="h3 page-title">{{$service->name}} Services</h2>
                                                                            <div>{{$service->description}}</div>
                                                                            <h3 class="h4 mb-20">Our Electrical Services Include:</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="elementor-element elementor-element-5bc740c1 elementor-widget elementor-widget-plumerfeatures" data-id="5bc740c1" data-element_type="widget" data-widget_type="plumerfeatures.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="service-feature-wrap">
                                                                            @foreach($service->features as $feature)                                                                      
                                                                            <div class="service-feature">
                                                                                <div class="media-body">
                                                                                    <h4 class="service-feature_title">{{ $feature['title'] }}</h4>
                                                                                    <p class="service-feature_text">{{ $feature['description'] }}</p>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <div class="elementor-element elementor-element-5bb31441 elementor-widget elementor-widget-text-editor" data-id="5bb31441" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="page-content">
                                                                            <h2 class="h3 page-title">
                                                                                <span style="
                                                                                            color: var(
                                                                                                --title-color
                                                                                            );
                                                                                            font-family: var(
                                                                                                --title-font
                                                                                            );
                                                                                            font-size: 24px;
                                                                                        ">Why
                                                                                    Chose
                                                                                    Us:</span>
                                                                            </h2>
                                                                            <div class="row mb-20">
                                                                                <div class="col-md-6 mb-10">
                                                                                    <div class="checklist">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <i class="fas fa-badge-check"></i>
                                                                                                Licensed
                                                                                                and
                                                                                                Certified
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fas fa-badge-check"></i>
                                                                                                Safety
                                                                                                First
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fas fa-badge-check"></i>Reliability
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6 mb-10">
                                                                                    <div class="checklist">
                                                                                        <ul>
                                                                                            <li>
                                                                                                <i class="fas fa-badge-check"></i>
                                                                                                Up-to-Date
                                                                                                Knowledge
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fas fa-badge-check"></i>
                                                                                                Transparent
                                                                                                Pricing
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="fas fa-badge-check"></i>
                                                                                                Customer
                                                                                                Satisfaction
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-efbc80c elementor-widget elementor-widget-text-editor" data-id="efbc80c" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="page-content">
                                                                            <h3 class="h4 mb-20">
                                                                                Contact
                                                                                Us:
                                                                            </h3>
                                                                        </div>
                                                                        Whether
                                                                        you
                                                                        need
                                                                        a
                                                                        minor
                                                                        {{ $service->category->name }}
                                                                        repair,
                                                                        a
                                                                        major
                                                                        {{ $service->category->name }}
                                                                        upgrade,
                                                                        or
                                                                        emergency
                                                                        services,
                                                                        Handyman
                                                                        to
                                                                        call
                                                                        is
                                                                        your
                                                                        trusted
                                                                        partner.
                                                                        Contact
                                                                        us
                                                                        today
                                                                        to
                                                                        discuss
                                                                        your
                                                                        electrical
                                                                        needs,
                                                                        and
                                                                        let
                                                                        us
                                                                        provide
                                                                        you
                                                                        with
                                                                        safe,
                                                                        efficient,
                                                                        and
                                                                        reliable
                                                                        solutions.<br /><br />
                                                                        <center>
                                                                            <a class="themeholy-btn style3" href="{{ route('home-contact') }}">Get
                                                                                a
                                                                                Quote</a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5588486c sidebar-area" data-id="5588486c" data-element_type="column">
                                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                                <!-- <div class="elementor-element elementor-element-34e871fe widget widget_search elementor-widget elementor-widget-wp-widget-search" data-id="34e871fe" data-element_type="widget" data-widget_type="wp-widget-search.default">
                                                                    <div class="elementor-widget-container">
                                                                        <form role="search" method="get" action="https://handymentocall.com/" class="search-form">
                                                                            <input name="s" required value="" type="search" class="form-control" placeholder="Search Here" />
                                                                            <button type="submit">
                                                                                <i class="fal fa-search"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                </div> -->
                                                                <div class="elementor-element elementor-element-4cfdedb elementor-widget elementor-widget-text-editor" data-id="4cfdedb" data-element_type="widget" data-widget_type="text-editor.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="widget widget_call" data-bg-src="assets/img/bg/widget_bg_1.jpg">
                                                                            <div class="widget-call">
                                                                                <h4 class="box-title">
                                                                                    For
                                                                                    {{ $service->name }}
                                                                                    Services
                                                                                </h4>
                                                                                <div class="play-btn"></div>
                                                                                <a class="call" href="2403803959">(240)
                                                                                    380-3959</a>
                                                                                <p class="text">
                                                                                    Whether
                                                                                    you
                                                                                    need
                                                                                    a
                                                                                    minor
                                                                                    {{ $service->category->name }}
                                                                                    repair,
                                                                                    a
                                                                                    major
                                                                                    {{ $service->category->name }}
                                                                                    upgrade,
                                                                                    or
                                                                                    emergency
                                                                                    services,
                                                                                    Handyman
                                                                                    to
                                                                                    call
                                                                                    is
                                                                                    your
                                                                                    trusted
                                                                                    partner.
                                                                                    Contact
                                                                                    us
                                                                                    today
                                                                                    to
                                                                                    discuss
                                                                                    your
                                                                                    electrical
                                                                                    needs,
                                                                                    and
                                                                                    let
                                                                                    us
                                                                                    provide
                                                                                    you
                                                                                    with
                                                                                    safe,
                                                                                    efficient,
                                                                                    and
                                                                                    reliable
                                                                                    solutions
                                                                                </p>
                                                                                <a class="themeholy-btn style3" href="{{route('home-contact')}}">Schedule
                                                                                    Now</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials._footer')
    <!-- Back to Top Button -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                        transition: stroke-dashoffset 10ms linear 0s;
                        stroke-dasharray: 307.919, 307.919;
                        stroke-dashoffset: 307.919;
                    "></path>
        </svg>
    </div>
    <!-- End of Back to Top Button -->
    <!-- <script type="application/ld+json">
        {
            "@context": "https:\/\/schema.org\/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "item": {
                        "name": "Home",
                        "@id": "https:\/\/handymentocall.com"
                    }
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "item": {
                        "name": "Electrical Services",
                        "@id": "./"
                    }
                }
            ]
        }
    </script> -->
    <script type="text/javascript">
        (function() {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, "woocommerce-js");
            document.body.className = c;
        })();
    </script>
    <link rel="stylesheet" id="elementor-post-1531-css" href="{{asset('service-assets/css/elementor-css-post-1531.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-post-2193-css" href="{{asset('service-assets/css/elementor-css-post-2193.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{asset('service-assets/css/elementor-assets-lib-font-awesome-css-fontawesome.min.css')}}" media="all" />
    <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{asset('service-assets/css/elementor-assets-lib-font-awesome-css-brands.min.css')}}" media="all" />
    <script src="{{asset('service-assets/js/contact-form-7-includes-swv-js-index.js')}}" id="swv-js"></script>
    <!-- <script id="contact-form-7-js-extra">
        var wpcf7 = {
            api: {
                root: "https:\/\/handymentocall.com\/wp-json\/",
                namespace: "contact-form-7\/v1",
            },
        };
    </script> -->
    <script src="{{asset('service-assets/js/contact-form-7-includes-js-index.js')}}" id="contact-form-7-js"></script>
    <!-- <script id="plumer-ajax-js-extra">
        var plumerajax = {
            action_url: "https:\/\/handymentocall.com\/wp-admin\/admin-ajax.php",
            nonce: "c9d336cc0c",
        };
    </script> -->
    <script src="{{asset('service-assets/js/plumer-core-assets-js-plumer.ajax.js')}}" id="plumer-ajax-js"></script>
    <script id="wc-add-to-cart-variation-js-extra">
        var wc_add_to_cart_variation_params = {
            wc_ajax_url: "\/?wc-ajax=%%endpoint%%",
            i18n_no_matching_variations_text: "Sorry, no products matched your selection. Please choose a different combination.",
            i18n_make_a_selection_text: "Please select some product options before adding this product to your cart.",
            i18n_unavailable_text: "Sorry, this product is unavailable. Please choose a different combination.",
        };
    </script>
    <script src="{{asset('service-assets/js/woocommerce-assets-js-frontend-add-to-cart-variation.min.js')}}" id="wc-add-to-cart-variation-js" data-wp-strategy="defer"></script>
    <script src="{{asset('service-assets/js/woo-smart-quick-view-assets-libs-slick-slick.min.js')}}" id="slick-js"></script>
    <script src="{{asset('service-assets/js/woo-smart-quick-view-assets-libs-perfect-scrollbar-js-perfect-scrollbar.jquery.min.js')}}" id="perfect-scrollbar-js"></script>
    <script src="{{asset('service-assets/js/woo-smart-quick-view-assets-libs-magnific-popup-jquery.magnific-popup.min.js')}}" id="magnific-popup-js"></script>
    <!-- <script id="woosq-frontend-js-extra">
        var woosq_vars = {
            ajax_url: "https:\/\/handymentocall.com\/wp-admin\/admin-ajax.php",
            nonce: "cd16f43958",
            view: "popup",
            effect: "mfp-3d-unfold",
            scrollbar: "yes",
            auto_close: "yes",
            hashchange: "no",
            cart_redirect: "no",
            cart_url: "https:\/\/handymentocall.com\/?page_id=10",
            close: "Close (Esc)",
            next: "Next (Right arrow key)",
            prev: "Previous (Left arrow key)",
            thumbnails_effect: "no",
            related_slick_params: '{"slidesToShow":2,"slidesToScroll":2,"dots":true,"arrows":false,"adaptiveHeight":true,"rtl":false}',
            thumbnails_slick_params: '{"slidesToShow":1,"slidesToScroll":1,"dots":true,"arrows":true,"adaptiveHeight":false,"rtl":false}',
            thumbnails_zoom_params: '{"duration":120,"magnify":1}',
            quick_view: "0",
        };
    </script> -->
    <script src="{{asset('service-assets/js/woo-smart-quick-view-assets-js-frontend.js')}}" id="woosq-frontend-js"></script>
    <script src="{{asset('service-assets/js/plumer-assets-js-bootstrap.min.js')}}" id="bootstrap-js"></script>
    <script src="{{asset('service-assets/js/plumer-assets-js-circle-progress.js')}}" id="circle-progress-js"></script>
    <script src="{{asset('service-assets/js/plumer-assets-js-isotope.pkgd.min.js')}}" id="isotope-pkgd-js"></script>
    <script src="{{asset('service-assets/js/plumer-assets-js-jquery-ui.min.js')}}" id="ui-js"></script>
    <script src="{{asset('service-assets/js/plumer-assets-js-jquery.counterup.min.js')}}" id="counterup-js"></script>
    <script src="{{asset('service-assets/js/plumer-assets-js-tilt.jquery.min.js')}}" id="tilt-js"></script>
    <script src="{{asset('service-assets/js/t63-imagesloaded.min.js')}}" id="imagesloaded-js"></script>
    <script src="{{asset('service-assets/js/plumer-assets-js-main.js')}}" id="plumer-main-script-js"></script>
    <script src="{{asset('service-assets/js/elementor-assets-js-webpack.runtime.min.js')}}" id="elementor-webpack-runtime-js"></script>
    <script src="{{asset('service-assets/js/elementor-assets-js-frontend-modules.min.js')}}" id="elementor-frontend-modules-js"></script>
    <script src="{{asset('service-assets/js/elementor-assets-lib-waypoints-waypoints.min.js')}}" id="elementor-waypoints-js"></script>
    <script src="{{asset('service-assets/js/jquery-ui-core.min.js')}}" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            environmentMode: {
                edit: false,
                wpPreview: false,
                isScriptDebug: false,
            },
            i18n: {
                shareOnFacebook: "Share on Facebook",
                shareOnTwitter: "Share on Twitter",
                pinIt: "Pin it",
                download: "Download",
                downloadImage: "Download image",
                fullscreen: "Fullscreen",
                zoom: "Zoom",
                share: "Share",
                playVideo: "Play Video",
                previous: "Previous",
                next: "Next",
                close: "Close",
                a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
                a11yCarouselPrevSlideMessage: "Previous slide",
                a11yCarouselNextSlideMessage: "Next slide",
                a11yCarouselFirstSlideMessage: "This is the first slide",
                a11yCarouselLastSlideMessage: "This is the last slide",
                a11yCarouselPaginationBulletMessage: "Go to slide",
            },
            is_rtl: false,
            breakpoints: {
                xs: 0,
                sm: 480,
                md: 768,
                lg: 1025,
                xl: 1440,
                xxl: 1600,
            },
            responsive: {
                breakpoints: {
                    mobile: {
                        label: "Mobile Portrait",
                        value: 767,
                        default_value: 767,
                        direction: "max",
                        is_enabled: true,
                    },
                    mobile_extra: {
                        label: "Mobile Landscape",
                        value: 880,
                        default_value: 880,
                        direction: "max",
                        is_enabled: false,
                    },
                    tablet: {
                        label: "Tablet Portrait",
                        value: 1024,
                        default_value: 1024,
                        direction: "max",
                        is_enabled: true,
                    },
                    tablet_extra: {
                        label: "Tablet Landscape",
                        value: 1200,
                        default_value: 1200,
                        direction: "max",
                        is_enabled: false,
                    },
                    laptop: {
                        label: "Laptop",
                        value: 1366,
                        default_value: 1366,
                        direction: "max",
                        is_enabled: false,
                    },
                    widescreen: {
                        label: "Widescreen",
                        value: 2400,
                        default_value: 2400,
                        direction: "min",
                        is_enabled: false,
                    },
                },
            },
            version: "3.17.3",
            is_static: false,
            experimentalFeatures: {
                e_dom_optimization: true,
                e_optimized_assets_loading: true,
                e_optimized_css_loading: true,
                additional_custom_breakpoints: true,
                container: true,
                e_swiper_latest: true,
                block_editor_assets_optimize: true,
                "landing-pages": true,
                e_image_loading_optimization: true,
                e_global_styleguide: true,
            },
            urls: {
                assets: "https:\/\/handymentocall.com\/wp-content\/plugins\/elementor\/assets\/",
            },
            swiperClass: "swiper",
            settings: {
                page: [],
                editorPreferences: []
            },
            kit: {
                active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                global_image_lightbox: "yes",
                lightbox_enable_counter: "yes",
                lightbox_enable_fullscreen: "yes",
                lightbox_enable_zoom: "yes",
                lightbox_enable_share: "yes",
                lightbox_title_src: "title",
                lightbox_description_src: "description",
            },
            post: {
                id: 3249,
                title: "Electrical%20Services%20%E2%80%93%20Handymen%20To%20Call",
                excerpt: "",
                featuredImage: false,
            },
        };
    </script>
    <script src="{{asset('service-assets/js/elementor-assets-js-frontend.min.js')}}" id="elementor-frontend-js"></script>
    <script src="{{asset('service-assets/js/plumer-core-assets-js-plumer-core.js')}}" id="plumer-core-js"></script>
    <script src="{{asset('service-assets/js/plumer-core-assets-js-plumer-frontend.js')}}" id="plumer-frontend-script-js"></script>
</body>

</html>