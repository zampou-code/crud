import { create, read, update, destroy } from "./functions.js";

const form = document.querySelector('#form');



document.addEventListener('DOMContentLoaded', () => updateShow());

form.addEventListener('submit', (e) => {
    e.preventDefault();
    const form_data = new FormData(form);
    form_data.append('type_of_operation', 'create');
    update(form_data).then(response => {
        console.log(response);
        if (response.status == 200) {
            form.reset();
            updateShow();
        }
    });
});

const updateShow = () => {
    let tab_person = document.querySelector('#tab_person');
    tab_person.innerHTML = "";

    let form_data = new FormData();
    form_data.append('type_of_operation', 'read');

    read(form_data).then(response => {
        let persons = response.persons;
        persons.forEach(person => {
            tab_person.innerHTML += `
             <tr>
                <td>${person.id}</td>
                <td>${person.firstname}</td>
                <td>${person.lastname}</td>
                <td>${person.phone}</td>
                <td>${person.sexe}</td>
                <td>
                    <button class="form-btn form-btn__danger del" value="${person.id}"><img src="css/delete_forever-white.svg" alt="trash icon"></button>
                    <button class="form-btn form-btn__success edit" value="${person.id}"><img src="css/edit-white.svg" alt="edit icon"></button>
                </td>
            </tr>
            `;
        });
    });
}





