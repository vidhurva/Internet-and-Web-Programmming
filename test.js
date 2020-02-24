containsPoint(x,y,w,h,px,py) == true

var test1 = containsPoint(0,0,10,10,20,10);
expect(test1).toEqual(false);

var test2 = containsPoint(0,0,10,10,5,5);
expect(test2).toEqual(true);
