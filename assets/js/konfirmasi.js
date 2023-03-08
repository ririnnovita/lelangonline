function hapusBarang(url) {

    Swal.fire({
        title: 'Yakin ingin hapus?',
        text: "Data akan hilang setelah dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        canselButtonColor: '#d33',
        confirmButtonText: 'ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}

function hapusLelang(url) {

    Swal.fire({
        title: 'Yakin ingin hapus?',
        text: "Data akan hilang setelah dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        canselButtonColor: '#d33',
        confirmButtonText: 'ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}

function hapusAdmin(url) {

    Swal.fire({
        title: 'Yakin ingin hapus?',
        text: "Data akan hilang setelah dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        canselButtonColor: '#d33',
        confirmButtonText: 'ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}

function Finish(url) {
    Swal.fire({
        title: 'Jadikan sebagai pemenang',
        // text: "Jadikan sebagai pemenang?",
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        canselButtonColor: '#d33',
        confirmButtonText: 'YA'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}

function Logout(url) {

    Swal.fire({
        title: 'Yakin ingin keluar?',
        // text: "yakin ingin logout?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        canselButtonColor: '#d33',
        confirmButtonText: 'YA'
    }).then((result) => {
        if (result.value) {
            document.location.href = url;
        }
    });
}
