<template>
    <div>
        <h1>Вакансия</h1>
        <form action="vacancy-view/submit" method="post">
        @csrf
        
            <div class="form-group">    
                <label for="title">Компания</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group"> 
            <label for="srok">Срок</label>
            <select class="form-control" name="srok" id="srok">
                <option value="">1-3 года</option>
            </select>
            </div>
            <div class="form-group"> 
            <label for="salary">Желаемая зарплата</label>
            <input class="form-control" type="text" name="salary" id="salary">
            </div>
            <div class="form-group"> 
            <label for="tip">Выберите тип</label>
            <select class="form-control" name="tip" id="tip">
                <option value="">тип 1</option>
            </select>
            </div>
            <div class="form-group"> 
            <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Условия"></textarea>
            </div>
            <div class="form-group"> 
            <textarea class="form-control" name="" id="" cols="30" rows="5" placeholder="Требования"></textarea>
            </div>
            <button type="submit" class="but_or btn">Сохранить</button>
        </form>
    </div>
</template>