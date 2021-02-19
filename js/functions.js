const apiUrl = "http://crud.test/controllers/person_controller.php";

let postData = (data) => {
    return fetch(apiUrl, {
        method: 'POST',
        body: data
    }).then(resp => resp.json())
        .then(data => data)
    .catch(errors => errors);
}

const create = (data) => {
    return postData(data);
}

const read = (data) => {
    return postData(data);
}

const update = (data) => {
    return postData(data);
}

const destroy = (data) => {
    return postData(data);
} 

export { create, read, update, destroy }