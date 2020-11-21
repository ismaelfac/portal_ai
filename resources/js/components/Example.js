import React from 'react';
import ReactDOM from 'react-dom';

function Dashboard() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-12">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Dashboard;

if (document.getElementById('root')) {
    ReactDOM.render(<Dashboard />, document.getElementById('root'));
}
