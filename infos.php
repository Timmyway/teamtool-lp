<?php require('header.php'); ?>
	<div class="main contairer-fluid mt-3 mb-3" id="app">
		<div v-if="!form.sent" class="container-fluid form-container shadow secondary p-5 form-anim relative">
			<h3 class="text--light text-uppercase">Please help me by filling those little informations</h3>
			<input
				class="form-control my-3" type="text"
				placeholder="You name. Ex: Tim"
				v-model="form.username"
			/>
			<input
				class="form-control my-3" type="text"
				placeholder="List of Kontiki databases you manage. Ex: Madestinée, Enviesdebonsplans"
				v-model="form.bases"
			/>
			<!-- Send user datas to the server -->
			<div class="flex">
				<!-- Loading icon -->
				<div v-if="isLoading" :class="['load-icon', isLoading ? 'lds-hourglass' : 'lds-hourglass']"></div>
				<transition name="fade">
					<button v-if="form.username != '' && form.bases != '' && !form.sent" class="btn--submit text--light" type="button" @click.prevent="sendInfos">{{ form.sent ? 'Sent' : 'Submit' }}</button>
				</transition>
			</div>
		</div>
		<div v-else class="container-fluid form-container shadow secondary p-5">
			<h3>Thank you for you precious help</h3>
		</div>
	</div>

	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data() {
				return {
					apiendpoint: "<?= baseUrl('validation.php')?>",
					isLoading: false,
					form: {
						username: '',
						bases: '',
						sent: false
					}
				}
			},
			created() {
				axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
		  },
			methods: {
				sendInfos() {
					this.isLoading = true;
					if (this.w3Trim(this.form.username) === '' && this.w3Trim(this.form.bases) === '') {
						console.log('Something goes wrong');
						this.isLoading = false;
						return
					}
					console.log('Send datas');
					const payload = {
						username: this.form.username,
						bases: this.form.bases
					};
					axios.post(this.apiendpoint, payload)
					.then((response) => {
						this.isLoading = false;
						console.log(response.data);
						if (response.data === 'yes-it-works') {
							this.form.sent = true;
						}
					})
					.catch((error) => {
						this.isLoading = false;
						this.form.sent = false;
						console.log(error);
					})
				},
				w3Trim: function(x) {
  				return x.replace(/^\s+|\s+$/gm,'');
				}
			}
		})
	</script>
<?php require('footer.php'); ?>
