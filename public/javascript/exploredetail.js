var segmentTerakhir = window.location.href.split('/').pop();

$.ajax({
    url: window.location.origin +'/explore-detail/' +segmentTerakhir+'/getdatadetail',
    type: "GET",
    dataType: "JSON",
    success: function(res){
        console.log(res);
      $('#fotodetail').prop('src', '/foto/' + res.dataDetailFoto.url)
      $('#judulfoto').html(res.dataDetailFoto.judul_foto)
      $('#deskripsifoto').html(res.dataDetailFoto.deskripsi_foto)
      $('#username').html(res.dataDetailFoto.users.nama_lengkap)
      $('#username').prop('href', '/other-pin/'+res.dataDetailFoto.users.id)
      $('#bebas').prop('src', '/img/' + res.dataDetailFoto.users.picture)

      ambilKomentar();
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('gagal');
    }
})

function ambilKomentar(){
    $.getJSON(window.location.origin +'/explore-detail/getKomentar/'+segmentTerakhir, function(res){
    console.log(res)

    if(res.data.length === 0){
        $('#listkomentar').html('<div>Belum ada komentar</div>')
    }else{
        komentar = []
            res.data.map((x) => {
                let datakomentar = {
                    idUser: x.user.id,
                    pengirim: x.user.nama_lengkap,
                    waktu: x. created_at,
                    isikomentar: x.isi_komentar,
                    potopengirim: x.user.pictures
                }
                komentar.push(datakomentar);
            })
            tampilkankomentar()

    }
    })
}

const tampilkankomentar = ()=>{
    $('#listkomentar').html('')
    komentar.map((x,i)=>{
        $('#listkomentar').append(`
    <div class="flex flex-row justify-start mt-4">
        <div class="w-1/4">
            <img src="img/${x.potopengirim}" class="rounded-full w-8 h-auto" alt="" >
        </div>
        <div class="flex flex-col mr-2">
            <h5 class="text-sm"><span class="font-bold">${x.pengirim}</span></h5>
            <small class="text-xs text-abuabu">${new Date(x.waktu).toLocaleDateString("id")}</small>
        </div>
        <h5 class="text-sm">${x.isikomentar}</h5>
    </div>
    `)
    })
}

function kirimkomentar(){
    $.ajax({
        url: window.location.origin +'/explore-detail/kirimkomentar',
        type: "POST",
        dataType: "JSON",
        data: {
            _token: $('input[name="_token"]').val(),
            idfoto: segmentTerakhir,
            isi_komentar: $('input[name="textkomentar"]').val()

        },
        success: function(res){
           location.reload()

        },
        error: function(jqXHR, textStatus, errorThrown){
            alert('gagal mengirim komentar')
        }
    })
}
