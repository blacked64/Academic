<template>
	<div>
		<v-server-table ref="table" :columns="columns" :url="url" :options="options">
			<div slot="grado" slot-scope="props">
				{{ formattedStatus(props.row.grado) }}
			</div>

			<div slot="select" slot-scope="props">
				<form :action="route_post" method="post">
					<input type="hidden" name="_token" :value="token">
					<input type="hidden" name="alumno_id" :value="props.row.id">
					<button 
					type="submit" class="btn btn-primary btn-block">
						<i class="fa fa-thumbs-up"></i> {{ labels.selected }}
					</button>
				</form>
			</div>
		</v-server-table>
	</div>
</template>

<script>
	import {Event} from 'vue-tables-2';
	export default {
		name: 'alumno',
		props: {
			labels: {
				type: Object,
				required: true
			},
			route: {
				type: String,
				required: true
			},
			route_post: {
				type: String,
				required: true
			},
			token: {
				type: String,
				required: true
			}
		},
		data() {
			return {
				processing: false,
				url: this.route,
				columns: ['cedula', 'nombre', 'grado', 'seccion', 'select'],
				options: {
					filterByColumn: true,
					perPage: 10,
					perPageValues: [10, 25, 50, 100, 500],
					headings: {
						cedula: this.labels.cedula,
						nombre: this.labels.nombre,
						grado: this.labels.grado,
						select: this.labels.select,
						selected: this.labels.selected,
						seccion: this.labels.seccion
					},
					sortable: ['cedula', 'nombre', 'grado', 'seccion'],
					filterable: ['cedula', 'nombre', 'grado', 'seccion'],
					requestFunction: (data) => {
						return window.axios.get(this.url, {
							params: data
						}).catch(function(e){
							this.dispatch('error', e);
						}.bind(this));
					},
				}
			}
		},
		methods: {
			formattedStatus(grado){
				const grados = [
					null,
					'1 Año',
					'2 Año',
					'3 Año',
					'4 Año',
					'5 Año',
				];
				return grados[grado];
			}
		}
	}
</script>

<style>

</style>