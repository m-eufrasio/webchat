import moment from 'moment';

export default {
    install(app) {
        app.config.globalProperties.$formatDate = function(value) {
            if (value) {
                return moment(value).format('DD/MM/YYYY HH:mm');
            }
            return '';
        };
    },
};
