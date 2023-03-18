function tb() {
    document.getElementById("tb").classList.remove("none");
    if (document.daftar.utusan.value='') {
        alert("Mohon isi semua Kolom");
    }
}
var e=1;
var pr="Peserta ke-";
function tambah() {
    var nama = document.daftar.nama.value;
    var usia = document.daftar.usia.value;
    var lomba = document.daftar.lomba.value;
    var a =[];
    a[0]=pr+e+"\nNama : "+ nama ;
    a[1]="Usia : "+usia;
    a[2]="Lomba : "+lomba;
    if (nama==''||usia==""||lomba=='') {
        confirm('Mohon isi semua kolom');
    }if (usia>99) {
        confirm("Ada kesalahan dalam mengisi kolom usia\nMohon diisi dengan benar!!");
    }
    else{
        document.daftar.struk.value+=a;
        e++;
        pr='\nPeserta ke-';

    }
}

