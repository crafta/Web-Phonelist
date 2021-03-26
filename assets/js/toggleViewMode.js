 /***
 * Toggles the view mode based on the user selection
 * Valid view modes: Grid, List
 */
function toggleViewMode(mode) {
	switch(mode) {
		case 'grid':
            window.viewMode = 'grid';
            renderUserGrid();
			break;
		case 'list':
            window.viewMode = 'list';
            renderUserList();
			break;
		default:
			renderUserGrid();
	}
}

function renderViewMode() {
    if(window.viewMode === 'grid') {
        renderUserGrid();
    }
    else if(window.viewMode === 'list') {
        renderUserList();
    }
}
