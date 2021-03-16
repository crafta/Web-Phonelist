/***
 * Renders the filter options dynamicly
 * Actually filters the userData, depending on users filter input
 */

function renderFilters() {
	const departments = window.departments;
	const departmentsEl = document.getElementById('departments');

	departments.map(department => {
		const optionEl = document.createElement('a');
		const valueEl = document.createTextNode(department);

		optionEl.className = 'dropdown-item';
		optionEl.href = '#';
		optionEl.addEventListener('click', function () {
			filterUserData(department);
		});

		optionEl.appendChild(valueEl);

		departmentsEl.appendChild(optionEl);
	});
}

function filterUserData(department) {
	const userData = window.userData;

	window.filteredUserData = userData.filter(user => user.gruppetext === department);
	renderUserGrid();
	countUserData();
}