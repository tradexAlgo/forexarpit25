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
document.getElementById("svgToggle").addEventListener("click", function () {
    var e = document.querySelector(".head111");
    "none" !== e.style.display && e.style.display ? (e.style.display = "none") : (e.style.display = "block");
}),
    document.querySelector(".crosslogo").addEventListener("click", function () {
        document.querySelector(".head111").style.display = "none";
    }),
    document.addEventListener("click", function (e) {
        var t = document.querySelector(".head111"),
            l = document.getElementById("svgToggle"),
            n = document.querySelector(".crosslogo");
        t.contains(e.target) || l.contains(e.target) || n.contains(e.target) || (t.style.display = "none");
    }),
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
    (window.onload = function () {
        displayStoredRows(), initializeIconState();
        var e = localStorage.getItem("theme");
        "dark" == e ? (console.log("dark_mode exists in localStorage: " + e), document.body.classList.add("dark-mode"), createTradingViewWidget("dark", "EURUSD"), (mode = "dark")) : console.log("Username does not exist in localStorage"),
            document.addEventListener("copy", function (e) {
                e.preventDefault();
            }),
            document.addEventListener("cut", function (e) {
                e.preventDefault();
            }),
            document.addEventListener("paste", function (e) {
                e.preventDefault();
            });
    });
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
        (document.getElementById("card_profit").innerText = l),
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
function appendDataRow(e) {
    let t = localStorage.getItem("description");
    t ? ((t = JSON.parse(t)), console.log("Stored " + t)) : (t = []),
        fetch(`https://rest.coincap.io/v3/assets/${e}?apiKey=b405c2aa467722f3586f45bf8d4f1efac2abb09d2cb1b664783ea90da84c7f28`)
            .then((e) => {
                if (!e.ok) throw Error(`Network response was not ok (Status: ${e.status})`);
                return e.json();
            })
            .then((l) => {
                console.log(l);
                let n = l.data.priceUsd,
                    s = parseFloat(n),
                    o = s.toFixed(2),
                    d = `
<div class="row" data-description="${e}">

<div class="col">
<div class="content d-flex align-center justify-center">
    <i style='font-size:24px;line-height: 1.7; height:100%' class='fas'>&#xf0de;</i>
    <p class="selectedDescriptions mb-0 fromleft" id="test"  data-value="${e}" >${e}</p>
</div>
</div>
<div class="col text-center">
<div class="content">
    <p class="mb-0"  id="bidvalue_${e}" data-value="${e}">${o}</p>
</div>
</div>
<div class="col text-center">
<div class="content">
    <p class="mb-0"  id="askvalue_${e}">${o}</p>
</div>
</div>
<div class="col text-center">
<div class="content">
    <p class="mb-0"  id="spreads_${e}">${o}</p>
</div>
</div>
</div>
`;
                myArray.push(e);
                let i = document.getElementById("contentRows");
                i.insertAdjacentHTML("beforeend", d);
                let a = document.querySelector(`.selectedDescriptions[data-value="${e}"]`);
                a &&
                    a.addEventListener("click", function () {
                        test(e, o);
                    }),
                    t.includes(e) || (t.push(e), localStorage.setItem("description", JSON.stringify(t)));
            })
            .catch((e) => {
                console.error("Fetch Error:", e);
            });
}
function test(e, t) {
    console.log("Symbol Clicked is " + e),
        (document.querySelector(".order_sell_price").innerText = t),
        (document.querySelector(".order_buy_price").innerText = t),
        (document.querySelector("#open_price").value = t),
        (document.querySelector("#user_symbol").value = e),
        (document.querySelector("#open_prices").value = t),
        "bitcoin" == e
            ? ((l = "BTC/USD"), console.log("Symbol is " + l))
            : "ethereum" == e
            ? (l = "ETH/USD")
            : "ethereum" == e
            ? (l = "ETH/USD")
            : "bitcoin-cas" == e
            ? (l = "BCH/USD")
            : "eos" == e
            ? (l = "EOS/USD")
            : "litecoin" == e
            ? (l = "LTC/USD")
            : "cardano" == e
            ? (l = "ADA/USD")
            : "tether" == e
            ? (l = "USDT/USD")
            : "tether" == e
            ? (l = "USDT/USD")
            : "iota" == e
            ? (l = "MIOTA/USD")
            : "tether" == e
            ? (l = "USDT/USD")
            : "monero" == e
            ? (l = "Monero/USD")
            : "neo" == e
            ? (l = "NEO/USD")
            : "dash" == e
            ? (l = "Dash/USD")
            : "tezos" == e
            ? (l = "XTZ/USD")
            : "zcash" == e
            ? (l = "ZEC/USD")
            : "omisego" == e
            ? (l = "OMG/USD")
            : "vechain" == e
            ? (l = "VET/USD")
            : "qtum" == e
            ? (l = "QTUM/USD")
            : "bitshares" == e
            ? (l = "BTS/USD")
            : "lisk" == e
            ? (l = "LSK/USD")
            : "decred" == e
            ? (l = "DCR/USD")
            : "zilliqa" == e
            ? (l = "ZIL/USD")
            : "aeternity" == e
            ? (l = "AE/USD")
            : "maker" == e
            ? (l = "MKR/USD")
            : "digibyte" == e && (l = "DGB/USD"),
        console.log("Symbol Clickasdadasdjkabdsked is " + l);
    var l,
        n = localStorage.getItem("theme");
    "dark" == n ? (console.log("dark_mode exists in localStorage: " + n), document.body.classList.add("dark-mode"), createTradingViewWidget("dark", l), (mode = "dark"), live_changes("dark")) : createTradingViewWidget("light", l);
}
function stop_order(e) {
    console.log("Order ID = " + e);
    let t = document.getElementById("symbol_" + e),
        l = document.getElementById("current_" + e).value;
    var n = t.getAttribute("data-value"),
        s = (document.getElementById("profit_" + e).value = n);
    console.log("Input ID  = " + s);
    let o = `/update/${e}`;
    console.log(s),
        fetch(o, { method: "PUT", headers: { "Content-Type": "application/json", "X-CSRF-TOKEN": document.getElementById("csrf").value }, body: JSON.stringify({ key1: s, key2: l }) })
            .then((e) => {
                if (!e.ok) throw Error(`HTTP error! Status: ${e.status}`);
                window.location.href = "/dashboard";
            })
            .then((e) => {
                console.log(e);
            })
            .catch((e) => {
                console.error(e);
            });
}
let previousData = null;
function live_changes(e) {
    console.log(myArray);
    for (let t = 0; t < myArray.length; t++)
        console.log(" Element is " + myArray[t]),
            fetch(`https://rest.coincap.io/v3/assets/${myArray[t]}?apiKey=b405c2aa467722f3586f45bf8d4f1efac2abb09d2cb1b664783ea90da84c7f28`)
                .then((e) => {
                    if (!e.ok) throw Error(`Network response was not ok (Status: ${e.status})`);
                    return e.json();
                })
                .then((e) => {
                    array = myArray[t];
                    let l = e.data.priceUsd,
                        n = parseFloat(l),
                        s = n.toFixed(2),
                        o = n.toFixed(2);
                    console.log(l);
                    let d = s - o;
                    if (null !== s) {
                        if ((null === previousData && (previousData = s), s > previousData)) {
                            let i = document.getElementById("bidvalue_" + myArray[t]),
                                a = document.getElementById("askvalue_" + myArray[t]),
                                r = document.getElementById("spreads_" + myArray[t]);
                            (i.style.backgroundColor = "green"), (i.textContent = s), (a.textContent = o), console.log("Color Is Green "), (r.textContent = Math.floor(d)), i.classList.add("buy");
                        } else if (s < previousData) {
                            let y = document.getElementById("bidvalue_" + myArray[t]),
                                c = document.getElementById("askvalue_" + myArray[t]),
                                p = document.getElementById("spreads_" + myArray[t]);
                            (y.style.backgroundColor = "red"), console.log("Color Is Red "), (y.textContent = s), (c.textContent = o), (p.textContent = Math.floor(d)), y.classList.add("sell");
                        } else console.log("Data remains the same.");
                        previousData = s;
                    }
                })
                .catch((e) => {
                    console.error("Fetch Error:", e);
                });
}
let pre_profit = null;
function calculate_profit(){
    for (let i = 0; i < order_symbols.length; i++) {

        const user_symbols = order_symbols[i].symbols;
        const user_price = order_symbols[i].pay;
        const symbol_vol= order_symbols[i].volume;
        const symbol_open= order_symbols[i].open;
        const id= order_symbols[i].id;

console.log("Symbol show in ". symbol_vol);
var apiUrl=`https://rest.coincap.io/v3/assets/${user_symbols}?apiKey=b405c2aa467722f3586f45bf8d4f1efac2abb09d2cb1b664783ea90da84c7f28`;
console.log(" Element is "+ user_symbols);


    fetch(apiUrl)
    .then(response => {
    if (!response.ok) {
    throw new Error(`Network response was not ok (Status: ${response.status})`);
    }
    return response.json();
    })
    .then(data => {

      const priceUsd = data.data.priceUsd;
      const priceUsdNumber = parseFloat(priceUsd);

      // Remove some decimal points (for example, rounding to 2 decimal places)
      const bidValue = priceUsdNumber.toFixed(2);
      var quantity=user_price/bidValue;
      console.log("You have " + quantity + " of Crypto Currency ");
      var entry_cost=symbol_open*quantity;
      var exit_revenue=bidValue*quantity;
    
        // var pip = (0.0001 / bidValue) * symbol_vol;

    //   var  profit= (symbol_vol*pip_value)/bidValue.toFixed(6);
      var  profit= (exit_revenue - entry_cost);
    //   var  profit= (bidValue - symbol_open);
        // var profit=pip_value*symbol_vol;
        console.log("Profit  Value  "  +  profit);

      var equity=  user_bal+profit;
      document.getElementById('equity').textContent=equity.toFixed(2);
      document.getElementById('mobile_equity').textContent=equity.toFixed(2);

// pip=0.47245


if (profit === null) {
    // Handle the case when the API request fails
    return;
  }
  
  if (pre_profit === null) {
    // Initial case, just store the data for future comparisons
    pre_profit = profit;
    console.log("Profit  Equals to Pre  "  +  profit);
    console.log(" Element is "+ pre_profit);

  }


if (profit > pre_profit) {
    console.log("Profit  Value Green "  +  profit);
   
    let element = document.getElementById('symbol_' + id);
    let mobilesymbol_ = document.getElementById('mobilesymbol_' + id);
    element.style.color = "green"; 
    mobilesymbol_.style.color = "green"; 
    
    element.classList.add('buy')
    mobilesymbol_.classList.add('buy')

        element.textContent=pre_profit.toFixed(6)+ " EUR";
        mobilesymbol_.textContent=pre_profit.toFixed(6)+ " EUR";
        let element2 = document.getElementById('current_' + id);
        element2.value=bidValue;
    
    
        // Step 2: Set the value of the data-value attribute
        element.setAttribute("data-value",profit);
    
        element2.setAttribute("data-value",bidValue);

  } else if (profit < pre_profit) {
    
    let element = document.getElementById('symbol_' + id);
    let mobilesymbol_ = document.getElementById('mobilesymbol_' + id);

    element.style.color = "red" ; 
    element.classList.add('sell')


    mobilesymbol_.style.color = "red" ; 
    mobilesymbol_.classList.add('sell')
    mobilesymbol_.style.color = "green"; 


        element.textContent=pre_profit.toFixed(6)+ " EUR";
        mobilesymbol_.textContent=pre_profit.toFixed(6)+ " EUR";
        let element2 = document.getElementById('current_' + id);
        element2.value=bidValue;
    
        let profit_input = document.getElementById('profit_' + id);
    
        // Step 2: Set the value of the data-value attribute
        profit_input.setAttribute("data-value",profit);
    
        element2.setAttribute("data-value",bidValue);
  } else {
    console.log('Data remains the same.');
  }
  pre_profit = profit;  
        // let element = document.getElementById('symbol_' + id);
        // element.textContent=profit;
       
    
 
    
    })
    .catch(error => {
    // Handle any errors that occurred during the fetch
    console.error('Fetch Error:', error);
    });
    }




}

function populateAndShowCard(e) {
    let t = e.getAttribute("data-ticket"),
        l = e.getAttribute("data-volume"),
        n = e.getAttribute("data-profit"),
        s = e.getAttribute("data-symbols"),
        o = e.getAttribute("data-type"),
        d = e.getAttribute("data-id");
    (document.getElementById("card_ticket").innerText = t),
        (document.getElementById("card_symbol").innerText = s),
        (document.getElementById("card_volume").innerText = l),
        (document.getElementById("card_profit").innerText = n),
        (document.getElementById("card_type").innerText = o);
    var i = document.getElementById("mobile_close_button");
    (i.textContent = "Close " + s + " Position"),
        (i.onclick = function () {
            stop_order(d);
        }),
        (document.getElementById("card2").style.display = "block");
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
    setInterval(calculate_profit, 1e3),
    setInterval(live_changes, 1e3);
