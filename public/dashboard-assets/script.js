function showSecondDropdown(e) {
    e.preventDefault();
    let t = document.getElementById("dropdowncard2");
    "none" !== t.style.display && t.style.display ? ((t.style.display = "none"), console.log("comes here none")) : ((t.style.display = "block"), console.log("comes here"));
}
function showThirdDropdown(e) {
    e.preventDefault();
    let t = document.getElementById("dropdowncard3");
    "none" !== t.style.display && t.style.display
        ? ((t.style.display = "none"), document.getElementById("dropdownCard"), console.log("comes here none"))
        : ((t.style.display = "block"), (dropdownCard.style.display = "none"), console.log("comes here"));
}
function showFourthDropdown(e) {
    e.preventDefault();
    let t = document.getElementById("dropdowncard4");
    "none" !== t.style.display && t.style.display
        ? ((t.style.display = "none"), document.getElementById("dropdownCard"), console.log("comes here none"))
        : ((t.style.display = "block"), (dropdownCard.style.display = "none"), console.log("comes here"));
}
function showFifthDropdown(e) {
    e.preventDefault();
    let t = document.getElementById("dropdowncard5");
    "none" !== t.style.display && t.style.display
        ? ((t.style.display = "none"), document.getElementById("dropdownCard"), console.log("comes here none"))
        : ((t.style.display = "block"), (dropdownCard.style.display = "none"), console.log("comes here"));
}
function showSixthDropdown(e) {
    e.preventDefault();
    let t = document.getElementById("dropdowncard6");
    "none" !== t.style.display && t.style.display
        ? ((t.style.display = "none"), document.getElementById("dropdownCard"), console.log("comes here none"))
        : ((t.style.display = "block"), (dropdownCard.style.display = "none"), console.log("comes here"));
}
function showSeventhDropdown(e) {
    e.preventDefault();
    let t = document.getElementById("dropdowncard7");
    "none" !== t.style.display && t.style.display
        ? ((t.style.display = "none"), document.getElementById("dropdownCard"), console.log("comes here none"))
        : ((t.style.display = "block"), (dropdownCard.style.display = "none"), console.log("comes here"));
}
document.addEventListener("DOMContentLoaded", function () {
    let e = document.getElementById("dropdownCard");
    document.getElementById("dropdowncard2-game"),
        document.querySelectorAll(".word a"),
        document.querySelector(".search-input").addEventListener("click", function (t) {
            (e.style.display = "block"), t.stopPropagation();
        });
});
const dropdownCard3 = document.getElementById("dropdowncard2");
function gamer(e) {
    console.log("comed here"), document.getElementById("dropdownCard"), (dropdownCard.style.display = "block"), (e.style.display = "none");
}
function toggleFullScreen() {
    let e = document.getElementById("headdd");
    document.fullscreenElement
        ? document.exitFullscreen()
        : e
            .requestFullscreen()
            .then(() => {
                createTradingViewWidget("light");
            })
            .catch((e) => {
                alert(`Error attempting to enable full-screen mode: ${e.message} (${e.name})`);
            });
}
function togglecard() {
    let e = document.getElementById("detailsCard");
    "none" === e.style.display || "" === e.style.display ? (e.style.display = "block") : (e.style.display = "none");
}
function togglecard() {
    let e = document.getElementById("detailsCard");
    "none" === e.style.display || "" === e.style.display ? (e.style.display = "block") : (e.style.display = "none");
}
function toggleDropdown() {
    let e = document.getElementById("marketExecutionDropdown");
    "none" !== e.style.display && e.style.display ? (e.style.display = "none") : (e.style.display = "block");
}
function incrementValue(e) {
    let t = document.getElementById(e);
    t.value = (parseFloat(t.value) + 0.01).toFixed(2);
}
function decrementValue(e) {
    let t = document.getElementById(e);
    parseFloat(t.value) > 0 && (t.value = (parsedFloat(t.value) - 0.01).toFixed(2));
}
function incrementValue(e) {
    let t = document.getElementById(e),
        l = parseFloat(t.value);
    t.value = (l + 0.01).toFixed(2);
}
function decrementValue(e) {
    let t = document.getElementById(e),
        l = parseFloat(t.value);
    t.value = (l - 0.01).toFixed(2);
}
function toggleIcon(e) {
    let t = e.querySelector("i"),
        l = e.closest(".dropdown-row1").querySelector(".description").textContent;
    t.classList.contains("fa-plus") ? (t.classList.remove("fa-plus"), t.classList.add("fa-check"), appendDataRow(l)) : (t.classList.remove("fa-check"), t.classList.add("fa-plus"), removeDataRow(l));
}
function initializeIconState() {
    let e = document.querySelectorAll(".toggle-btn");
    e.forEach((e) => {
        let t = e.closest(".dropdown-row1").querySelector(".description");
        if (!t) {
            console.error("Missing .description element for button:", e);
            return;
        }
        let l = t.textContent,
            n = e.querySelector("i");
        console.log("Processing button for description:", l);
        let s = localStorage.getItem("description");
        (s = s ? JSON.parse(s) : []).includes(l) ? (n.classList.remove("fa-plus"), n.classList.add("fa-check")) : (n.classList.remove("fa-check"), n.classList.add("fa-plus"));
    });
}
function removeDataRow(e) {
    let t = document.querySelectorAll(".row[data-description]");
    for (let l of t)
        if (l.getAttribute("data-description") === e) {
            l.parentNode.removeChild(l);
            break;
        }
    let n = localStorage.getItem("description");
    if (n) {
        n = JSON.parse(n);
        let s = n.indexOf(e);
        s > -1 && (n.splice(s, 1), localStorage.setItem("description", JSON.stringify(n)));
    }
}
function displayStoredRows() {
    let e = localStorage.getItem("description");
    if (e) for (let t of (e = JSON.parse(e))) appendDataRow(t);
}
function toggleCard() {
    let e = document.getElementById("mainCard"),
        t = document.querySelector(".tradingview-widget-container");
    "none" !== e.style.display && e.style.display
        ? ((e.style.display = "none"), t.classList.remove("col-lg-8", "col-md-12", "col-sm-12"), t.classList.add("col-12"))
        : ((e.style.display = "block"), t.classList.add("col-lg-8", "col-md-12", "col-sm-12"), t.classList.remove("col-12"));
}
function firstchart() {
    (document.querySelector(".table-responsive").style.display = "block"),
        (document.querySelector(".table-responsive2").style.display = "none"),
        (document.querySelector(".btn.btn-secondary.orders.ms-1").style.display = "block"),
        (document.querySelectorAll(".btn.btn-secondary.orders.ms-1")[1].style.display = "none");
}
function secondchart() {
    (document.querySelector(".table-responsive").style.display = "none"),
        (document.querySelector(".table-responsive2").style.display = "block"),
        (document.querySelector(".btn.btn-secondary.orders.ms-1").style.display = "none"),
        (document.querySelectorAll(".btn.btn-secondary.orders.ms-1")[1].style.display = "block");
}
function navtoggle() {
    let e = document.getElementById("sidebar"),
        t = document.getElementById("mainContent");
    if ("none" === e.style.display || "" === e.style.display) {
        let l = document.getElementById("endsection");
        (l.style.width = "82%"), (e.style.display = "block"), t.classList.add("bordergiveparent"), t.classList.remove("borderrevised");
    } else (e.style.display = "none"), t.classList.remove("bordergiveparent"), t.classList.add("borderrevised"), (endsection.style.width = "100%");
}
// document.getElementById("svgToggle").addEventListener("click", function () {
//     var e = document.querySelector(".head111");
//     "none" !== e.style.display && e.style.display ? (e.style.display = "none") : (e.style.display = "block");
// }),
document.querySelector(".crosslogo").addEventListener("click", function () {
    document.querySelector(".head111").style.display = "none";
}),
    // document.addEventListener("click", function (e) {
    //     var t = document.querySelector(".head111"),
    //         // l = document.getElementById("svgToggle"),
    //         n = document.querySelector(".crosslogo");
    //     t.contains(e.target) || l.contains(e.target) || n.contains(e.target) || (t.style.display = "none");
    // }),
    document.querySelector(".clickedcross").addEventListener("click", function () {
        document.querySelector(".head111").style.display = "none";
    }),
    document.getElementById("themeToggle").addEventListener("click", function () {
        document.body.classList.contains("dark-mode")
            ? (document.body.classList.remove("dark-mode"), createTradingViewWidget("light"), localStorage.setItem("theme", "light"))
            : (document.body.classList.add("dark-mode"), createTradingViewWidget("dark"), localStorage.setItem("theme", "dark"));
    }),
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector(".search-input").addEventListener("keyup", function e() {
            let t = document.querySelector(".search-input"),
                l = t.value.toUpperCase(),
                n = document.querySelectorAll(".dropdown-row1");
            n.forEach((e) => {
                let t = e.textContent || e.innerText;
                t.toUpperCase().indexOf(l) > -1 ? (e.style.display = "") : (e.style.display = "none");
            });
        });
    }),
    document.addEventListener("DOMContentLoaded", function () {
        let e = document.getElementById("dropdownCard"),
            t = document.getElementById("dropdowncard2"),
            l = document.querySelector(".search-input"),
            n = document.querySelector(".clickedcross");
        l.addEventListener("click", function (t) {
            (e.style.display = "block"), t.stopPropagation();
        }),
            n.addEventListener("click", function () {
                (e.style.display = "none"),
                    (t.style.display = "none"),
                    (dropdowncard3.style.display = "none"),
                    (dropdowncard4.style.display = "none"),
                    (dropdowncard5.style.display = "none"),
                    (dropdowncard6.style.display = "none"),
                    (dropdowncard7.style.display = "none"),
                    (l.value = "");
            });
    }),
    window.onload = function () {
        displayStoredRows();
        initializeIconState();

        // Check if theme is stored in localStorage and set the theme
        var storedTheme = localStorage.getItem("theme");
        if (storedTheme === "dark") {
            console.log("dark_mode exists in localStorage: " + storedTheme);
            document.body.classList.add("dark-mode");
            createTradingViewWidget("dark", "EURUSD");
            mode = "dark";
        } else {
            console.log("No dark mode in localStorage or it's set to light.");
        }



        // Prevent copy, cut, and paste actions
        document.addEventListener("copy", function (e) {
            e.preventDefault();
        });

        document.addEventListener("cut", function (e) {
            e.preventDefault();
        });

        document.addEventListener("paste", function (e) {
            e.preventDefault();
        });
    };


const endsection = document.getElementById("endsection");
function togglewidgetonmobile() {
    let e = document.getElementById("ordersmobilepagesecond");
    e.style.display = "none";
    let t = document.getElementById("isthisflex");
    t.style.display = "none";
    let l = document.getElementById("widgetmobilescreen"),
        n = document.getElementById("trademobilepage"),
        s = document.getElementById("historymobilepage"),
        o = document.getElementById("mainCard"),
        d = document.getElementById("detailsCard"),
        i = document.getElementById("sidebar"),
        a = document.getElementById("mainContent");
    a.classList.add("bordergiveparent"), a.classList.remove("borderrevised");
    let r = document.getElementById("endsection");
    r.style.width = "82%";
    let y = document.getElementById("firstcontent");
    (l.style.display = "block"),
        (y.style.display = "flex"),
        (i.style.display = "block"),
        (n.style.display = "none"),
        (o.style.display = "none"),
        (d.style.display = "none"),
        (s.style.display = "none"),
        l.classList.add("col-12", "col-lg-12", "col-md-12", "col-sm-12"),
        l.classList.remove("col-lg-8", "col-md-12", "col-sm-12", "col-12");
}
function trademobilepages() {
    let e = document.getElementById("trademobilepage"),
        t = document.getElementById("widgetmobilescreen"),
        l = document.getElementById("historymobilepage"),
        n = document.getElementById("mainCard"),
        s = document.getElementById("detailsCard"),
        o = document.getElementById("sidebar"),
        d = document.getElementById("isthisflex");
    d.style.display = "none";
    let i = document.getElementById("firstcontent"),
        a = document.getElementById("mainContent");
    a.classList.remove("bordergiveparent"), a.classList.add("borderrevised");
    let r = document.getElementById("endsection");
    (r.style.width = "100%"), (i.style.display = "none");
    let y = document.getElementById("ordersmobilepagesecond");
    (y.style.display = "none"), (e.style.display = "block"), (t.style.display = "none"), (l.style.display = "none"), (n.style.display = "none"), (s.style.display = "none"), (o.style.display = "none"), (i.style.display = "none");
}
function toggleCardformobile() {
    let e = document.getElementById("mainCard"),
        t = document.getElementById("isthisflex");
    t.style.display = "none";
    let l = document.getElementById("historymobilepage"),
        n = document.getElementById("trademobilepage"),
        s = document.getElementById("widgetmobilescreen"),
        o = document.getElementById("detailsCard"),
        d = document.getElementById("sidebar"),
        i = document.getElementById("firstcontent"),
        a = document.getElementById("mainContent"),
        r = document.getElementById("endsection");
    r.style.width = "100%";
    let y = document.getElementById("ordersmobilepagesecond");
    (y.style.display = "none"),
        a.classList.remove("bordergiveparent"),
        a.classList.add("borderrevised"),
        document.querySelector(".tradingview-widget-container"),
        (e.style.display = "block"),
        (l.style.display = "none"),
        (n.style.display = "none"),
        (s.style.display = "none"),
        (o.style.display = "none"),
        (d.style.display = "none"),
        (i.style.display = "none"),
        e.classList.add("col-lg-12", "col-md-12"),
        e.classList.remove("col-lg-4", "col-md-8");
}
function closeAlert() {
    document.getElementById("customAlert").style.display = "none";
}
function detailscardformobile() {
    let e = document.getElementById("detailsCard"),
        t = document.getElementById("trademobilepage"),
        l = document.getElementById("widgetmobilescreen"),
        n = document.getElementById("mainCard"),
        s = document.getElementById("historymobilepage"),
        o = document.getElementById("ordersmobilepagesecond");
    o.style.display = "none";
    let d = document.getElementById("isthisflex");
    d.style.display = "none";
    let i = document.getElementById("endsection");
    i.style.width = "100%";
    let a = document.getElementById("mainContent");
    a.classList.remove("bordergiveparent"), a.classList.add("borderrevised");
    let r = document.getElementById("sidebar"),
        y = document.getElementById("firstcontent");
    (e.style.display = "block"), (r.style.display = "none"), (y.style.display = "flex"), (t.style.display = "none"), (l.style.display = "none"), (n.style.display = "none"), (s.style.display = "none");
}
function historymobilepages() {
    let e = document.getElementById("historymobilepage"),
        t = document.getElementById("trademobilepage"),
        l = document.getElementById("widgetmobilescreen"),
        n = document.getElementById("mainCard"),
        s = document.getElementById("detailsCard"),
        o = document.getElementById("isthisflex");
    o.style.display = "flex";
    let d = document.getElementById("ordersmobilepagesecond"),
        i = document.getElementById("sidebar"),
        a = document.getElementById("firstcontent");
    a.style.display = "none";
    let r = document.getElementById("endsection");
    r.style.width = "100%";
    let y = document.getElementById("mainContent");
    y.classList.remove("bordergiveparent"),
        y.classList.add("borderrevised"),
        (e.style.display = "block"),
        (t.style.display = "none"),
        (l.style.display = "none"),
        (n.style.display = "none"),
        (s.style.display = "none"),
        (d.style.display = "none"),
        (i.style.display = "none"),
        (a.style.display = "none");
}
function ordermobilepagess() {
    let e = document.getElementById("ordersmobilepagesecond"),
        t = document.getElementById("trademobilepage"),
        l = document.getElementById("widgetmobilescreen"),
        n = document.getElementById("mainCard"),
        s = document.getElementById("detailsCard"),
        o = document.getElementById("historymobilepage"),
        d = document.getElementById("sidebar"),
        i = document.getElementById("firstcontent");
    i.style.display = "none";
    let a = document.getElementById("endsection");
    a.style.width = "100%";
    let r = document.getElementById("mainContent");
    r.classList.remove("bordergiveparent"),
        r.classList.add("borderrevised"),
        (e.style.display = "block"),
        (t.style.display = "none"),
        (l.style.display = "none"),
        (n.style.display = "none"),
        (s.style.display = "none"),
        (o.style.display = "none"),
        (d.style.display = "none"),
        (i.style.display = "none");
}
function showCard(e, t, l, n, s) {
    let o = document.getElementById("card");
    (document.getElementById("card_ticket").innerText = e),
        (document.getElementById("card_volume").innerText = t),
        // (document.getElementById("card_profit").innerText = l),
        "none" !== o.style.display && o.style.display ? (o.style.display = "none") : (o.style.display = "block");
}
function toggledropdownmobile() {
    let e = document.getElementById("marketExecutionDropdown"),
        t = document.getElementById("trademobilepage"),
        l = document.getElementById("widgetmobilescreen"),
        n = document.getElementById("mainCard"),
        s = document.getElementById("historymobilepage"),
        o = document.getElementById("ordersmobilepagesecond");
    o.style.display = "none";
    let d = document.getElementById("isthisflex");
    d.style.display = "none";
    let i = document.getElementById("endsection");
    i.style.display = "none";
    let a = document.getElementById("mainContent");
    a.classList.remove("bordergiveparent"), a.classList.add("borderrevised");
    let r = document.getElementById("sidebar");
    (r.style.display = "none"),
        document.getElementById("firstcontent"),
        "none" !== e.style.display && e.style.display
            ? (e.style.display = "none")
            : ((e.style.display = "block"), (r.style.display = "none"), (t.style.display = "none"), (l.style.display = "none"), (n.style.display = "none"), (s.style.display = "none"));
}
endsection.style.width = "82%";
let myArray = [];
let fetchTimestamps = {}; // Store last fetch time per symbol

function canFetch(symbol) {
    const now = Date.now();
    const lastFetch = fetchTimestamps[symbol] || 0;
    if (now - lastFetch >= 1000) { // 40 seconds
        fetchTimestamps[symbol] = now;
        return true;
    }
    return false;
}

function appendDataRow(e) {
    let t = localStorage.getItem("description");
    t ? (t = JSON.parse(t)) : (t = []);

    if (!canFetch(e)) {
        console.log(`Skipping fetch for ${e}, throttled.`);
        return;
    }

    // Convert symbol format from CoinCap to Binance (e.g., "bitcoin" to "BTCUSDT")
    const symbolMap = {
        "bitcoin": "BTCUSDT",
        "ethereum": "ETHUSDT",
        "bitcoin-cas": "BCHUSDT",
        "eos": "EOSUSDT",
        "litecoin": "LTCUSDT",
        "cardano": "ADAUSDT",
        "bnb": "BNBUSDT",
        "solana": "SOLUSDT",
        "ripple": "XRPUSDT",
        "polkadot": "DOTUSDT",
        "tron": "TRXUSDT",
        "stellar": "XLMUSDT",
        "chainlink": "LINKUSDT",
        "filecoin": "FILUSDT",
        "uniswap": "UNIUSDT",
        "dogecoin": "DOGEUSDT",
        "aave": "AAVEUSDT",
        "lido staked eth": "",  // Lido token is LDO
        "ethereum classic": "",
        "wrapped bnb": "WBNBUSDT",
        "iota": "IOTAUSDT",
        "monero": "XMRUSDT",

        "tether": "",  // This is fake; better hardcode 1.00
        "wrapped eth": "AWEUSDT",
        "dash": "DASHBTC",
        "digibyte": "DGDBTC",
        "neo": "NEOTUSD",
        "bittensor": "TAOBTC",
        "decred": "DCRBTC",
        "maker": "MKRUSDT",
        "usdt": "BTCUSDT", // hardcode price 1.00 for tether
    };
    // Use the symbolMap to get the Binance symbol
    // If the symbol is not found in the map, default to BTCUSDT
    // or handle it as needed (e.g., skip, show an error, etc.)
    // For example, if the symbol is "pi", you might want to skip it or
    // show a message that it's not available on Binance.
    // Here, we default to BTCUSDT if the symbol is not found in the map
    // You can also handle this case differently if needed.
    // For example, you could skip the fetch or show a message.
    // const binanceSymbol = symbolMap[e] || "BTCUSDT"; // Default  to BTC if mapping not found
    // For the sake of this example, let's assume we want to skip symbols not found in the map
    // if (!symbolMap[e]) {
    //     console.warn(`Symbol "${e}" not found in symbolMap, skipping fetch.`);
    //     return;
    // }


    const binanceSymbol = symbolMap[e]; // Default to BTC if mapping not found

    fetch(`https://api.binance.com/api/v3/ticker/price?symbol=${binanceSymbol}`)
        .then((res) => {
            if (!res.ok) throw Error(`Network response was not ok (Status: ${res.status})`);
            return res.json();
        })
        .then((data) => {
            let price = parseFloat(data.price),
                formattedPrice = price.toFixed(2),
                html = `
                <div class="row" data-description="${e}">
                    <div class="col">
                        <div class="content d-flex align-center justify-center">
                            <i style='font-size:24px;line-height: 1.7; height:100%' class='fas'>&#xf0de;</i>
                            <p class="selectedDescriptions mb-0 fromleft" id="test" data-value="${e}">${e}</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="content">
                            <p class="mb-0" id="bidvalue_${e}" data-value="${e}">${formattedPrice}</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="content">
                            <p class="mb-0" id="askvalue_${e}">${formattedPrice}</p>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="content">
                            <p class="mb-0" id="spreads_${e}">0.00</p> <!-- Binance doesn't provide spread directly -->
                        </div>
                    </div>
                </div>`;

            myArray.push(e);
            document.getElementById("contentRows").insertAdjacentHTML("beforeend", html);

            let element = document.querySelector(`.selectedDescriptions[data-value="${e}"]`);
            if (element) {
                element.addEventListener("click", function () {
                    test(e, formattedPrice);
                });
            }

            if (!t.includes(e)) {
                t.push(e);
                localStorage.setItem("description", JSON.stringify(t));
            }
        })
        .catch((error) => {
            console.error("Fetch Error:", error);
        });
}
function test(e, t) {
    console.log("Symbol Clicked is " + e);
    document.querySelector(".order_sell_price").innerText = t;
    document.querySelector(".order_buy_price").innerText = t;
    document.querySelector("#open_price").value = t;
    document.querySelector("#user_symbol").value = e;
    document.querySelector("#open_prices").value = t;

    let l;
    switch (e) {
        case "BTC_USD": l = "BTC/USD"; break;
        case "ethereum": l = "ETH/USD"; break;
        case "bitcoin-cas": l = "BCH/USD"; break;
        case "eos": l = "EOS/USD"; break;
        case "litecoin": l = "LTC/USD"; break;
        case "cardano": l = "ADA/USD"; break;
        case "tether": l = "USDT/USD"; break;
        case "iota": l = "MIOTA/USD"; break;
        case "monero": l = "Monero/USD"; break;
        case "neo": l = "NEO/USD"; break;
        case "dash": l = "Dash/USD"; break;
        case "tezos": l = "XTZ/USD"; break;
        case "zcash": l = "ZEC/USD"; break;
        case "omisego": l = "OMG/USD"; break;
        case "vechain": l = "VET/USD"; break;
        case "qtum": l = "QTUM/USD"; break;
        case "bitshares": l = "BTS/USD"; break;
        case "lisk": l = "LSK/USD"; break;
        case "decred": l = "DCR/USD"; break;
        case "zilliqa": l = "ZIL/USD"; break;
        case "aeternity": l = "AE/USD"; break;
        case "maker": l = "MKR/USD"; break;
        case "digibyte": l = "DGB/USD"; break;
    }

    const theme = localStorage.getItem("theme");
    if (theme === "dark") {
        document.body.classList.add("dark-mode");
        createTradingViewWidget("dark", l);
        live_changes("dark");
    } else {
        createTradingViewWidget("light", l);
    }
}

function stop_order(e) {
    console.log("Order ID = " + e);
    let t = document.getElementById("symbol_" + e),
        l = document.getElementById("current_" + e).value,
        n = t.getAttribute("data-value");

    fetch(`/update/${e}`, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.getElementById("csrf").value
        },
        body: JSON.stringify({ key1: n, key2: l })
    })
        .then((res) => {
            if (!res.ok) throw Error(`HTTP error! Status: ${res.status}`);
            window.location.href = "/dashboard";
        })
        .catch(console.error);
}

let previousData = null;
function live_changes(theme) {
    for (let t = 0; t < myArray.length; t++) {
        const symbol = myArray[t];
        if (!canFetch(symbol)) {
            console.log(`Throttled live update for ${symbol}`);
            continue;
        }

        // Convert symbol to Binance format
        const symbolMap = {
            "bitcoin": "BTCUSDT",
            "ethereum": "ETHUSDT",
            "bitcoin-cas": "BCHUSDT",
            "eos": "EOSUSDT",
            "litecoin": "LTCUSDT",
            "cardano": "ADAUSDT",
            "bnb": "BNBUSDT",
            "solana": "SOLUSDT",
            "ripple": "XRPUSDT",
            "polkadot": "DOTUSDT",
            "tron": "TRXUSDT",
            "stellar": "XLMUSDT",
            "chainlink": "LINKUSDT",
            "filecoin": "FILUSDT",
            "uniswap": "UNIUSDT",
            "dogecoin": "DOGEUSDT",
            "aave": "AAVEUSDT",
            "lido staked eth": "",  // Lido token is LDO
            "ethereum classic": "",
            "wrapped bnb": "WBNBUSDT",
            "iota": "IOTAUSDT",
            "monero": "XMRUSDT",

            "tether": "",  // This is fake; better hardcode 1.00
            "wrapped eth": "AWEUSDT",
            "dash": "DASHBTC",
            "digibyte": "DGDBTC",
            "neo": "NEOTUSD",
            "bittensor": "TAOBTC",
            "decred": "DCRBTC",
            "maker": "MKRUSDT",
            "usdt": "BTCUSDT", // hardcode price 1.00 for tether
        };

        const binanceSymbol = symbolMap[symbol] || "BTCUSDT";

        fetch(`https://api.binance.com/api/v3/ticker/price?symbol=${binanceSymbol}`)
            .then((res) => {
                if (!res.ok) throw Error(`Network response was not ok (Status: ${res.status})`);
                return res.json();
            })
            .then((data) => {
                let price = parseFloat(data.price).toFixed(2);
                // Binance doesn't provide bid/ask directly, so we'll use the same price for both
                let bid = document.getElementById("bidvalue_" + symbol);
                let ask = document.getElementById("askvalue_" + symbol);
                let spreads = document.getElementById("spreads_" + symbol);

                if (previousData === null) previousData = price;

                if (price > previousData) {
                    bid.style.backgroundColor = "green";
                    bid.textContent = price;
                    ask.textContent = price;
                    spreads.textContent = "0.00"; // Binance doesn't provide spread
                    bid.classList.add("buy");
                } else if (price < previousData) {
                    bid.style.backgroundColor = "red";
                    bid.textContent = price;
                    ask.textContent = price;
                    spreads.textContent = "0.00"; // Binance doesn't provide spread
                    bid.classList.add("sell");
                }

                previousData = price;
            })
            .catch(console.error);
    }
}

let pre_profit = null;
function calculate_profit() {
    for (let i = 0; i < order_symbols.length; i++) {
        const { symbols, pay, volume, open, id } = order_symbols[i];

        if (!canFetch(symbols)) {
            console.log(`Skipping profit calc for ${symbols}, throttled.`);
            continue;
        }

        // Map CoinCap symbols to Binance symbols
        const symbolMap = {
            "bitcoin": "BTCUSDT",
            "ethereum": "ETHUSDT",
            "bitcoin-cas": "BCHUSDT",
            "eos": "EOSUSDT",
            "litecoin": "LTCUSDT",
            "cardano": "ADAUSDT",
            "bnb": "BNBUSDT",
            "solana": "SOLUSDT",
            "ripple": "XRPUSDT",
            "polkadot": "DOTUSDT",
            "tron": "TRXUSDT",
            "stellar": "XLMUSDT",
            "chainlink": "LINKUSDT",
            "filecoin": "FILUSDT",
            "uniswap": "UNIUSDT",
            "dogecoin": "DOGEUSDT",
            "aave": "AAVEUSDT",
            "lido staked eth": "",  // Lido token is LDO
            "ethereum classic": "",
            "wrapped bnb": "WBNBUSDT",
            "iota": "IOTAUSDT",
            "monero": "XMRUSDT",

            "tether": "",  // This is fake; better hardcode 1.00
            "wrapped eth": "AWEUSDT",
            "dash": "DASHBTC",
            "digibyte": "DGDBTC",
            "neo": "NEOTUSD",
            "bittensor": "TAOBTC",
            "decred": "DCRBTC",
            "maker": "MKRUSDT",
            "usdt": "BTCUSDT", // hardcode price 1.00 for tether
        };

        const binanceSymbol = symbolMap[symbols.toLowerCase()] || "BTCUSDT";

        fetch(`https://api.binance.com/api/v3/ticker/price?symbol=${binanceSymbol}`)
            .then((res) => {
                if (!res.ok) throw new Error(`Network response was not ok (Status: ${res.status})`);
                return res.json();
            })
            .then((data) => {
                const currentPrice = parseFloat(data.price);
                const bidValue = currentPrice.toFixed(2);
                const quantity = pay / currentPrice;
                const entry_cost = open * quantity;
                const exit_revenue = currentPrice * quantity;

                console.log(`You have ${entry_cost} of Crypto Currency ${symbols}`);

                // Calculate profit
                const profit = currentPrice - open;
                console.log(`Profit Value: ${profit}`);

                // Update equity
                const equity = user_bal + profit;
                document.getElementById('equity').textContent = equity.toFixed(2);
                document.getElementById('mobile_equity').textContent = equity.toFixed(2);

                // Get DOM elements
                const element = document.getElementById('symbol_' + id);
                const mobilesymbol = document.getElementById('mobilesymbol_' + id);
                const element2 = document.getElementById('current_' + id);
                const profit_input = document.getElementById('profit_' + id);

                if (!element || !mobilesymbol || !element2 || !profit_input) {
                    console.error('Could not find required DOM elements');
                    return;
                }

                // Update display based on profit change
                if (pre_profit === null) {
                    // Initial case
                    pre_profit = profit;
                    console.log(`Initial profit: ${profit}`);
                }

                if (profit > pre_profit) {
                    console.log(`Profit increased to ${profit}`);
                    element.style.color = "green";
                    mobilesymbol.style.color = "green";
                    element.classList.add('buy');
                    mobilesymbol.classList.add('buy');
                } else if (profit < pre_profit) {
                    console.log(`Profit decreased to ${profit}`);
                    element.style.color = "red";
                    mobilesymbol.style.color = "red";
                    element.classList.add('sell');
                    mobilesymbol.classList.add('sell');
                }

                // Update values
                element.textContent = profit.toFixed(6) + " USD";
                mobilesymbol.textContent = profit.toFixed(6) + " USD";
                element2.value = bidValue;
                element.setAttribute("data-value", profit);
                element2.setAttribute("data-value", bidValue);
                profit_input.setAttribute("data-value", profit);

                pre_profit = profit;
            })
            .catch((error) => {
                console.error('Fetch Error:', error);
                // Optionally implement retry logic or error display
            });
    }
}

let selectedData = {
    ticket: null,
    volume: null,
    profit: null,
    symbols: null,
    type: null,
    id: null,
};

// function populateAndShowCard(e) {
//     let t = e.getAttribute("data-ticket"),
//         l = e.getAttribute("data-volume"),
//         n = e.getAttribute("data-profit"),
//         s = e.getAttribute("data-symbols"),
//         o = e.getAttribute("data-type"),
//         d = e.getAttribute("data-id");
//     (document.getElementById("card_ticket").innerText = t),
//         (document.getElementById("card_symbol").innerText = s),
//         (document.getElementById("card_volume").innerText = l),
//         // (document.getElementById("card_profit").innerText = n),
//         (document.getElementById("card_type").innerText = o);
//     var i = document.getElementById("mobile_close_button");
//     (i.textContent = "Close " + s + " Position"),
//         (i.onclick = function () {
//             stop_order(d);
//         }),
//         (document.getElementById("card2").style.display = "block");
// }


function populateAndShowCard(e) {
    let t = e.getAttribute("data-ticket"),
        l = e.getAttribute("data-volume"),
        n = e.getAttribute("data-profit"),
        s = e.getAttribute("data-symbols"),
        o = e.getAttribute("data-type"),
        d = e.getAttribute("data-id");

    // Store the data in the selectedData object
    selectedData.ticket = t;
    selectedData.volume = l;
    selectedData.profit = n;
    selectedData.symbols = s;
    selectedData.type = o;
    selectedData.id = d;

    document.getElementById("card_ticket").innerText = t;
    document.getElementById("card_symbol").innerText = s;
    document.getElementById("card_volume").innerText = l;
    document.getElementById("card_type").innerText = o;

    var i = document.getElementById("mobile_close_button");
    i.textContent = "Close " + s + " Position";
    i.onclick = function () {
        stop_order(d);
    };
    document.getElementById("card2").style.display = "block";
}




function populatecard(e) {
    console.log("Function triggered");
    let t = e.getAttribute("data-ticket"),
        l = e.getAttribute("data-volume"),
        n = e.getAttribute("data-profit"),
        s = e.getAttribute("data-symbols");
    console.log("these are the values", t, l, n, s),
        (document.getElementById("card_ticket1").innerText = t),
        (document.getElementById("card_symbol1").innerText = s),
        (document.getElementById("card_volume1").innerText = l),
        (document.getElementById("card_profit1").innerText = n);
    let o = document.getElementById("card");
    "none" !== o.style.display && o.style.display ? (o.style.display = "none") : (o.style.display = "block");
}
function hideit() {
    console.log("comed here");
    let e = document.getElementById("card2");
    e.style.display = "none";
}
// document.addEventListener("contextmenu", function (e) {
//     e.preventDefault();
// }),
setInterval(calculate_profit, 1e3);
setInterval(live_changes, 1e3);







