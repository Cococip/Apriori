// route
var rProsesTambahPenjualan = server + "app/penjualan/tambah/proses";
var rGetDataPenjualan = server + "app/penjualan/data/res";

// vue object
var appPenjualan = new Vue({
    el: "#divDataPenjualan",
    data: {},
    methods: {
        tambahPenjualanAtc: function () {
            $("#modalTambahPenjualan").modal("show");
            setTimeout(function () {
                document.querySelector("#txtNamaPenjualan").focus();
            }, 500);
        },
        prosesTambahPenjualan: function () {
            prosesTambahPenjualan();
        },
        detailAtc: function (kdFaktur) {
            renderPage("app/penjualan/detail/" + kdFaktur, "Detail Penjualan");
        },
    },
});

//

// inisialisasi
$("#tblDataPenjualan").dataTable();
// function prosesTambahPenjualan()
// {
//     const selectElement = document.getElementById("txtProduk");
//     const selectedIndex = selectElement.selectedIndex;
//     const kodeProduk = selectElement.options[selectedIndex].getAttribute("data-kode-produk");
//     const jumlahProduk = document.querySelector('#txtqtProduk').value;
//     const ds = {
//         'kodeProduk': kodeProduk,
//         'jumlahProduk': jumlahProduk
//     };
//     axios.post(rProsesTambahPenjualan, ds).then(function(res){
//         $("#modalTambahPenjualan").modal("hide");
//         setTimeout(function(){
//             pesanUmumApp('success', 'Sukses', 'Data penjualan berhasil ditambahkan');
//             renderPage('app/penjualan/data', 'Penjualan');
//         }, 300);

//     });
// }

function tambahForm() {
    var additionalFormsDiv = document.getElementById("additionalForms");
    var newFormDiv = document.createElement("div");
    newFormDiv.className = "form-group d-flex align-items-center";

    var selectElement = document.createElement("select");
    selectElement.className = "form-control mr-2";
    selectElement.innerHTML =
        '<option value="none">--- Pilih Produk ---</option>' +
        document.getElementById("txtProduk").innerHTML;
    selectElement.name = "produk[]"; // Nama input untuk produk tambahan

    var inputElement = document.createElement("input");
    inputElement.type = "number";
    inputElement.className = "form-control";
    inputElement.placeholder = "Jumlah";
    inputElement.style.width = "90px";
    inputElement.name = "jumlah[]"; // Nama input untuk jumlah tambahan

    newFormDiv.appendChild(selectElement);
    newFormDiv.appendChild(inputElement);

    additionalFormsDiv.appendChild(newFormDiv);
}

function prosesTambahPenjualan() {
    const selectElements = document.querySelectorAll("select[name='produk[]']");
    const jumlahElements = document.querySelectorAll("input[name='jumlah[]']");

    let data = [];

    selectElements.forEach((selectElement, index) => {
        const selectedIndex = selectElement.selectedIndex;
        const kodeProduk =
            selectElement.options[selectedIndex].getAttribute(
                "data-kode-produk"
            );
        const jumlahProduk = jumlahElements[index].value;

        if (kodeProduk !== "none" && jumlahProduk) {
            data.push({
                kodeProduk: kodeProduk,
                jumlahProduk: jumlahProduk,
            });
        }
    });

    // console.log(data);
    // return;

    axios
        .post(rProsesTambahPenjualan, { penjualan: data })
        .then(function (res) {
            $("#modalTambahPenjualan").modal("hide");
            setTimeout(function () {
                pesanUmumApp(
                    "success",
                    "Sukses",
                    "Data penjualan berhasil ditambahkan"
                );
                renderPage("app/penjualan/data", "Penjualan");
            }, 300);
        });
}
