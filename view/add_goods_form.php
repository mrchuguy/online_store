<fieldset><p>Р”РѕР±Р°РІР»РµРЅРёРµ С‚РѕРІР°СЂР° РІ РєР°С‚РµРіРѕСЂРёСЋ <?= $id ?> </p><div id="add_goods_form">
        <form id="add goods" method="post" enctype="multipart/form-data">
            <label> РќР°РёРјРµРЅРѕРІР°РЅРёРµ С‚РѕРІР°СЂР°: <input type="text" name="good"/></label>
            <label> Р¦РµРЅР°: <input type="number" name="price"/></label>
            <label> РћРїРёСЃР°РЅРёРµ: <textarea name="description"></textarea></label>
            <label> РџСЂРѕРёР·РІРѕРґРёС‚РµР»СЊ: <select id="manufacturers" name="manufacturer">
                                        
                </select></label>
            <label> РЎС‚СЂР°РЅР° РїСЂРѕРёР·РІРѕРґСЃС‚РІР°: <select id="countries" name="country">
                    <option>-</option>
                    <option>Р‘СЂР°Р·РёР»РёСЏ</option>
                    <option>РљРѕР»СѓРјР±РёСЏ</option>
                    <option>РњРµРєСЃРёРєР°</option>
                    <option>РќРёРєР°СЂР°РіСѓР°</option>
                </select></label>
            <label> Р”РѕР±Р°РІРёС‚СЊ С„РѕС‚Рѕ: <input type="file" name="image[]" accept="image/*" multiple/></label>
            <input type="submit" value="Р”РѕР±Р°РІРёС‚СЊ С‚РѕРІР°СЂ"/>
        </form>
    </div></fieldset>
