import React,{ Component } from 'react';
import ReactDOM from 'react-dom';
import Page from './Page';
class Contract extends Component {

    render() {
        return(
            <Page components />
        )
    }
}

export default Contract;

if (document.getElementById('contract_viewport')) {
    ReactDOM.render(<Contract/>, document.getElementById('contract_viewport'));
}
