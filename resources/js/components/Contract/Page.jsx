import React from 'react';

function Page(props){
    return (
        <div className="row">
            <div className="input-group mb-3 col-md-12">
                <div className="input-group-prepend">
                    <span className="input-group-text" id="basic-addon1">Titulo</span>
                </div>
                <input type="text" name="title_contract" className="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1" />
            </div>
            <div className="input-group mb-3 col-md-12">
                <div className="input-group-prepend">
                    <span className="input-group-text" id="basic-addon1">Descripcion del contrato</span>
                </div>
                <input type="text" name="title_contract" className="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1" />
            </div>
        </div>
    );
}

export default Page;
