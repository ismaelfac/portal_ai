import React from 'react';

function Page(props){
    return (
        <div className="list-group list-group-flush">
            <div className="list-group-item list-group-item-action">
                <div className="d-flex w-100 justify-content-between">
                <h5 className="mb-1">{ componentType }</h5>
                <small>3 days ago</small>
                </div>
                <p className="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
            </div>
        </div>
    );
}

export default Page;
