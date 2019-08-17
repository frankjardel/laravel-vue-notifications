import store from './vuex/store'
import swal from 'sweetalert'

const typesNotifications = {
	orderNotification: 'App\\Notifications\\OrderNotification',
}

if (Laravel.user) {

	Echo.private(`App.User.${Laravel.user}`)
		.notification(notification => {
			if (Laravel.user == notification.data.order.user.id) {
				if (notification.type == typesNotifications.orderNotification) {
					swal(
						'Novo Pedido',
						`Resumo do Pedido: ${notification.data.order.order}, por ${notification.data.order.user.name}`,
						'info'
					)

					store.commit('ADD_NOTIFICATION', notification)
				}
			}
		})
}
