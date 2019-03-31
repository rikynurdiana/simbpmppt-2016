<!-- AJAX FORM INSERT PROGRAM -->
$(function(){
	$("#save_program").click(function(e){
		$.ajax({
			url:'/master/create_program',
			type: 'POST',
			data: $("#input-program").serialize(),
			success: function(response){
				if (response.success == true) {
					var id 		 		= response.id;
					var kode_program 	= $('#kode_program').val();
					var nama_program 	= $('#nama_program').val();
					var item = $("<tr>" + "<td>" + kode_program + "</td>" +
								 "<td>" + nama_program + "</td>" +
								 "<td>" + "<center><strong>BARU</strong></center>" + "</td></tr>")
								 .hide().fadeIn(1500);
					$("#table_program").prepend(item);
					toastr["success"](response.message)
				} else {
					toastr["error"](response.message)
				}

			},
			error: function(){
				toastr["error"]("ERROR","Ada Kesalahan Sistem")
			}
		});
		e.preventDefault();
	});
});

<!-- AJAX FORM INSERT KEGIATAN -->
$(function(){
	$("#save_kegiatan").click(function(e){
		$.ajax({
			url:'/master/create_kegiatan',
			type: 'POST',
			data: $("#input-kegiatan").serialize(),
			success: function(response){
				if (response.success == true) {
					var id 		 		= response.id;
					var kode_program 	= $('#kode_program').val();
					var kode_kegiatan 	= $('#kode_kegiatan').val();
					var nama_kegiatan 	= $('#nama_kegiatan').val();
					var item = $("<tr>" + "<td>" + "&nbsp;&nbsp;&nbsp;" + "[ " + kode_program + " ]" + "[ " + kode_kegiatan + " ]" + "</td>" +
								 "<td>" + nama_kegiatan + "</td>" +
								 "<td>" + "<center><strong>BARU</strong></center>" + "</td></tr>")
								 .hide().fadeIn(1500);

					$("#table_kegiatan").prepend(item);
					toastr["success"](response.message)
				} else {
					toastr["error"](response.message)
				}
			},
			error: function(){
				toastr["error"]("ERROR","Ada Kesalahan Sistem")
			}
		});
		e.preventDefault();
	});
});

<!-- AJAX FORM INSERT SUB KEGIATAN -->
$(function(){
	$("#save_subkegiatan").click(function(e){
		$.ajax({
			url:'/master/create_subkegiatan',
			type: 'POST',
			data: $("#input-subkegiatan").serialize(),
			success: function(response){
				if (response.success == true) {
					var id 		 			= response.id;
					var kode_program		= $('#kode_program').val();
					var kode_kegiatan		= $('#kode_kegiatan').val();
					var kode_subkegiatan 	= $('#kode_subkegiatan').val();
					var nama_subkegiatan 	= $('#nama_subkegiatan').val();
					var item = $("<tr>" + "<td>" + "&nbsp;&nbsp;&nbsp;" + "[ " + kode_program + " ]" + "[ " + kode_kegiatan + " ]" + "[ " + kode_subkegiatan + " ]" + "</td>" +
								 "<td>" + nama_subkegiatan + "</td>" +
								 "<td>" + "<center><strong>BARU</strong></center>" + "</td></tr>")
								 .hide().fadeIn(1500);

					$("#table_subkegiatan").prepend(item);
					toastr["success"](response.message)
				} else {
					toastr["error"](response.message)
				}
			},
			error: function(){
				toastr["error"]("ERROR","Ada Kesalahan Sistem")
			}
		});
		e.preventDefault();
	});
});

<!-- AJAX FORM INSERT UNIT -->
$(function(){
	$("#save_unit").click(function(e){
		$.ajax({
			url:'/master/create_unit',
			type: 'POST',
			data: $("#input-unit").serialize(),
			success: function(response){
				if (response.success == true) {
					var id 		 			= response.id;
					var kode_program 		= $('#kode_program').val();
					var kode_kegiatan 		= $('#kode_kegiatan').val();
					var kode_subkegiatan 	= $('#kode_subkegiatan').val();
					var nama_unit 			= $('#nama_unit').val();
					var volume 				= $('#volume').val();
					var satuan 				= $('#satuan').val();
					var harga 				= $('#harga').val();
					var jumlah 				= $('#jumlah').val();
					var item = $("<tr>" + "<td>" + "&nbsp;&nbsp;&nbsp;" + "[ " + kode_program + " ]" + "[ " + kode_kegiatan + " ]" + "[ " + kode_subkegiatan + " ]" + "</td>" +
								 "<td>" + nama_unit + "</td>" +
								 "<td>" + volume + "</td>" +
								 "<td>" + satuan + "</td>" +
								 "<td>" + harga + "</td>" +
								 "<td>" + volume * harga + "</td>" +
								 "<td>" + "<center><strong>BARU</strong></center>" + "</td></tr>")
								 .hide().fadeIn(1500);

					$("#table_unit").prepend(item);
					toastr["success"](response.message)
				} else {
					toastr["error"](response.message)
				}
			},
			error: function(){
				toastr["error"]("ERROR","Ada Kesalahan Sistem")
			}
		});
		e.preventDefault();
	});
});

<!-- PARSING RESPONSE KODE REKENING FOR KEGIATAN -->
$(document).ready(function() {
    $("#id_program option").filter(function() {
        return $(this).val() == $("#kode_program").val();
    }).attr('selected', true);

    $("#id_program").live("change", function() {
        $("#kode_program").val($(this).find("option:selected").attr("kode-program"));
    });
});

<!-- PARSING RESPONSE KODE REKENING FOR SUB KEGIATAN -->
$(document).ready(function() {
    $("#id_kegiatan option").filter(function() {
        return ['$(this).val() == $("#id_program").val()',
        		'$(this).val() == $("#kode_program").val()',
        		'$(this).val() == $("#nama_program").val()',
        		'$(this).val() == $("#kode_kegiatan").val()']
    }).attr('selected', true);

    $("#id_kegiatan").live("change", function() {
        $("#id_program").val($(this).find("option:selected").attr("id-program"));
        $("#kode_program").val($(this).find("option:selected").attr("kode-program"));
        $("#nama_program").val($(this).find("option:selected").attr("nama-program"));
        $("#kode_kegiatan").val($(this).find("option:selected").attr("kode-kegiatan"));
        $("#nama_program").show();
    });
});

<!-- PARSING RESPONSE KODE REKENING FOR UNIT SUB KEGIATAN -->
$(document).ready(function() {
    $("#id_subkegiatan option").filter(function() {
        return ['$(this).val() == $("#id_program").val()',
        		'$(this).val() == $("#kode_program").val()',
        		'$(this).val() == $("#nama_program").val()',
        		'$(this).val() == $("#id_kegiatan").val()',
        		'$(this).val() == $("#kode_kegiatan").val()',
        		'$(this).val() == $("#nama_kegiatan").val()',
        		'$(this).val() == $("#kode_subkegiatan").val()']
    }).attr('selected', true);

    $("#id_subkegiatan").live("change", function() {
        $("#nama_program").val($(this).find("option:selected").attr("nama-program"));
        $("#nama_kegiatan").val($(this).find("option:selected").attr("nama-kegiatan"));
        $("#kode_subkegiatan").val($(this).find("option:selected").attr("kode-subkegiatan"));
        $("#nama_program").show();
    	$("#nama_kegiatan").show();
    });
});

