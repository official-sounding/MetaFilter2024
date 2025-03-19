import 'notyf/notyf.min.css';
import { Notyf } from 'notyf';

// Configure Notyf with default settings
const notyf = new Notyf({
    duration: 3000,
    position: {
        x: 'right',
        y: 'top',
    },
    types: [
        {
            type: 'success',
            background: '#28a745',
            icon: false
        },
        {
            type: 'error',
            background: '#dc3545',
            icon: false
        }
    ]
});

// Export the notyf instance for use in other files
export default notyf;

