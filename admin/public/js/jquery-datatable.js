$(function() {
	$('.js-basic-example').DataTable();

	//Exportable table
	$('.js-exportable').DataTable({
		dom: 'Bfrtip',
		buttons: [ 'copy', 'csv', 'excel', 'pdf', 'print' ]
	});
});

/* Formatting function for row details - modify as you need */
function formatHotel(d) {
	// `d` is the original data object for the row
	return (
		'<table class="table table-dark">' +
		'<thead>' +
		'<tr>' +
		'<th scope="col">Services Name</th>' +
		'<th scope="col">Small</th>' +
		'<th scope="col">Medium</th>' +
		'<th scope="col">Large</th>' +
		'<th scope="col">Xlarge</th>' +
		'<th scope="col">Cat </th>' +
		'<th scope="col">H Small</th>' +
		'<th scope="col">H Medium</th>' +
		'<th scope="col">H Large</th>' +
		'<th scope="col">H Xlarge</th>' +
		'<th scope="col">H Cat</th>' +
		' </tr>' +
		'</thead>' +
		'<tbody>' +
		'<tr>' +
		'<th>Boarding</th>' +
		'<td>' +
		(d.s_B_s_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_B_m_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_B_l_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_B_xl_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_B_cat_price || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_S || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_M || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_L || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_XL || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_cat || 0) +
		'</td>' +
		' </tr>' +
		'<tr>' +
		'<th>Daycare</th>' +
		'<td>' +
		(d.s_D_s_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_D_m_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_D_l_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_D_xl_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_D_cat_price || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_D_S || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_D_M || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_D_L || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_D_XL || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_D_cat || 0) +
		'</td>' +
		' </tr>' +
		'<tr>' +
		'<th>Washing</th>' +
		'<td>' +
		(d.s_W_s_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_W_m_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_W_l_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_W_xl_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_W_cat_price || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_W_S || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_W_M || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_W_L || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_W_XL || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_W_cat || 0) +
		'</td>' +
		' </tr>' +
		'<tr>' +
		'<th>Gromming  / Trimming</th>' +
		'<td>' +
		(d.s_N_s_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_N_m_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_N_l_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_N_xl_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_N_cat_price || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_N_S || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_N_M || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_N_L || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_N_XL || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_N_cat || 0) +
		'</td>' +
		' </tr>' +
		'<tr>' +
		'<th>Medication</th>' +
		'<td>' +
		(d.s_M_s_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_M_m_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_M_l_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_M_xl_price || 0) +
		'</td>' +
		'<td>' +
		(d.s_M_cat_price || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_M_S || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_M_M || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_M_L || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_M_XL || 0) +
		'</td>' +
		'<td>' +
		(d.highSession_M_cat || 0) +
		'</td>' +
		' </tr>' +
		'<tr>' +
		'<th>Actions</th>' +
		'<td></td>' +
		'<td></td>' +
		'<td></td>' +
		'<td><i class="fa fa-check-circle-o fa-2x d-flex justify-content-center" onclick="approve();" id="approve" aria-hidden="true" style="color:#ffffff;"></i></td>' +
		'<td></td>' +
		'<td><i class="fa fa-times-circle-o fa-2x d-flex justify-content-center decline " onclick="decline();" style="color:#fffffff"; ></i></td>' +
		'<td></td>' +
		'<td></td>' +
		'<td></td>' +
		'<td></td>' +
		' </tr>' +
		'</tbody>' +
		'</table>'
	);
}
function formatSitter(d) {
	// `d` is the original data object for the row
	return (
		'<table class="table table-dark">' +
		'<thead>' +
		'<tr>' +
		'<th scope="col">#</th>' +
		'<th scope="col">First</th>' +
		'<th scope="col">Last</th>' +
		'<th scope="col">Handle</th>' +
		' </tr>' +
		'</thead>' +
		'<tbody>' +
		'<tr>' +
		'<th scope="row">1</th>' +
		'<td>Mark</td>' +
		'<td>Otto</td>' +
		'<td>@mdo</td>' +
		' </tr>' +
		'<tr>' +
		'<th scope="row">2</th>' +
		'<td>Jacob</td>' +
		'<td>Thornton</td>' +
		'<td>@fat</td>' +
		'</tr>' +
		'<tr>' +
		'<th scope="row">3</th>' +
		'<td>Larry</td>' +
		'<td>the Bird</td>' +
		'<td>@twitter</td>' +
		'</tr>' +
		'</tbody>' +
		'</table>'
	);
}
var subId = '';
$(document).ready(function() {
	var table = $('#example').DataTable({
		ajax: 'includes/adminResult.php',
		columns: [
			{
				className: 'details-control',
				orderable: false,
				data: null,
				defaultContent: ''
			},
			{ data: 'id' },
			{ data: 'first_name' },
			{ data: 'username' },
			{ data: 'email' },
			{ data: 'hotel_name' },
			{ data: 'type', className: 'd-none' }
		],
		order: [ [ 1, 'asc' ] ]
	});

	// Add event listener for opening and closing details
	$('#example tbody').on('click', 'td.details-control', function() {
		var tr = $(this).closest('tr');
		var row = table.row(tr);
		var deta = row.data().id;
		subId = deta;
		if (row.child.isShown()) {
			// This row is already open - close it
			row.child.hide();
			tr.removeClass('shown');
		} else {
			// Open this row

			if (row.data().type == 2) {
				$.ajax({
					url: 'includes/hotelDetail.php',
					method: 'POST',
					dataType: 'JSON',
					data: { id: row.data().id },
					success: function(data) {
						console.log("fatih")
						console.log(data)
						if (data.data.length > 0) {
							row.child(formatHotel(data.data[0])).show();
							tr.addClass('shown');
						}
					},
					error: function(err) {
						console.log(err);
					}
				});
			} else {
				$.ajax({
					url: 'includes/sitterDetail.php',
					method: 'POST',
					dataType: 'JSON',
					data: { id: row.data().id },
					success: function(data) {
						console.log(data)
						console.log("serkan")
						if (data.data.length > 0) {
							row.child(formatSitter(data.data[0])).show();
							tr.addClass('shown');
						}
					},
					error: function(err) {
						console.log(err);
					}
				});
			}
		}
	});
});
function approve() {
	console.log(subId);
	$.ajax({
		url: 'includes/update.php',
		method: 'POST',
		data: { type: '1', id: subId },

		dataType: 'JSON',
		success: function(data) {
			console.log(data);
		},
		error: function(err) {
			console.log(err);
		}
	});
	alert('updated');
}
function decline() {
	console.log(subId);
	$.ajax({
		url: 'includes/decline.php',
		method: 'POST',
		data: { type: '0', id: subId },
		dataType: 'JSON',
		success: function(data) {
			console.log(data);
			alert();
		},
		error: function(err) {
			console.log(err);
		}
	});
	alert('updated');
}

// Add row into table
var addRowTable = {
	options: {
		addButton: '#addToTable',
		table: '#addrowExample',
		dialog: {}
	},
	initialize: function() {
		this.setVars().build().events();
	},
	setVars: function() {
		return (
			(this.$table = $(this.options.table)),
			(this.$addButton = $(this.options.addButton)),
			(this.dialog = {}),
			(this.dialog.$wrapper = $(this.options.dialog.wrapper)),
			(this.dialog.$cancel = $(this.options.dialog.cancelButton)),
			(this.dialog.$confirm = $(this.options.dialog.confirmButton)),
			this
		);
	},
	build: function() {
		return (
			(this.datatable = this.$table.DataTable({
				aoColumns: [
					null,
					null,
					null,
					{
						bSortable: !1
					}
				]
			})),
			(window.dt = this.datatable),
			this
		);
	},
	events: function() {
		var object = this;
		return (
			this.$table
				.on('click', 'button.button-save', function(e) {
					e.preventDefault(), object.rowSave($(this).closest('tr'));
				})
				.on('click', 'button.button-discard', function(e) {
					e.preventDefault(), object.rowCancel($(this).closest('tr'));
				})
				.on('click', 'button.button-edit', function(e) {
					e.preventDefault(), object.rowEdit($(this).closest('tr'));
				})
				.on('click', 'button.button-remove', function(e) {
					e.preventDefault();
					var $row = $(this).closest('tr');
					swal(
						{
							title: 'Are you sure?',
							text: 'You will not be able to recover this imaginary file!',
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#dc3545',
							confirmButtonText: 'Yes, delete it!',
							closeOnConfirm: false
						},
						function() {
							object.rowRemove($row);
							swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
						}
					);
				}),
			this.$addButton.on('click', function(e) {
				e.preventDefault(), object.rowAdd();
			}),
			this.dialog.$cancel.on('click', function(e) {
				e.preventDefault(), $.magnificPopup.close();
			}),
			this
		);
	},
	rowAdd: function() {
		this.$addButton.attr({
			disabled: 'disabled'
		});
		var actions, data, $row;
		(actions = [
			'<button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-save" data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>',
			'<button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>',
			'<button class="btn btn-sm btn-icon btn-pure btn-default on-default button-edit" data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></button>',
			'<button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash" aria-hidden="true"></i></button>'
		].join(' ')),
			(data = this.datatable.row.add([ '', '', '', actions ])),
			($row = this.datatable.row(data[0]).nodes().to$()).addClass('adding').find('td:last').addClass('actions'),
			this.rowEdit($row),
			this.datatable.order([ 0, 'asc' ]).draw();
	},
	rowCancel: function($row) {
		var $actions, data;
		$row.hasClass('adding')
			? this.rowRemove($row)
			: (($actions = $row.find('td.actions')).find('.button-discard').tooltip('hide'),
				$actions.get(0) && this.rowSetActionsDefault($row),
				(data = this.datatable.row($row.get(0)).data()),
				this.datatable.row($row.get(0)).data(data),
				this.handleTooltip($row),
				this.datatable.draw());
	},
	rowEdit: function($row) {
		var data,
			object = this;
		(data = this.datatable.row($row.get(0)).data()),
			$row.children('td').each(function(i) {
				var $this = $(this);
				$this.hasClass('actions')
					? object.rowSetActionsEditing($row)
					: $this.html('<input type="text" class="form-control input-block" value="' + data[i] + '"/>');
			});
	},
	rowSave: function($row) {
		var $actions,
			object = this,
			values = [];
		$row.hasClass('adding') && (this.$addButton.removeAttr('disabled'), $row.removeClass('adding')),
			(values = $row.find('td').map(function() {
				var $this = $(this);
				return $this.hasClass('actions')
					? (object.rowSetActionsDefault($row), object.datatable.cell(this).data())
					: $.trim($this.find('input').val());
			})),
			($actions = $row.find('td.actions')).find('.button-save').tooltip('hide'),
			$actions.get(0) && this.rowSetActionsDefault($row),
			this.datatable.row($row.get(0)).data(values),
			this.handleTooltip($row),
			this.datatable.draw();
	},
	rowRemove: function($row) {
		$row.hasClass('adding') && this.$addButton.removeAttr('disabled'),
			this.datatable.row($row.get(0)).remove().draw();
	},
	rowSetActionsEditing: function($row) {
		$row.find('.on-editing').removeAttr('hidden'), $row.find('.on-default').attr('hidden', !0);
	},
	rowSetActionsDefault: function($row) {
		$row.find('.on-editing').attr('hidden', !0), $row.find('.on-default').removeAttr('hidden');
	},
	handleTooltip: function($row) {
		$row.find('[data-toggle="tooltip"]').tooltip();
	}
};
$(function() {
	addRowTable.initialize();
});
