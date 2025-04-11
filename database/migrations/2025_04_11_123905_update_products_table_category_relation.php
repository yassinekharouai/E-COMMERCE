public function up()
{
    // Add category_id column
    Schema::table('products', function (Blueprint $table) {
        $table->foreignId('category_id')->nullable()->after('category');
    });

    // Migrate data from string category to ID relationship
    $categories = \App\Models\Category::all();
    
    \App\Models\Product::chunk(100, function($products) use ($categories) {
        foreach ($products as $product) {
            $category = $categories->firstWhere('category_name', $product->category);
            if ($category) {
                $product->category_id = $category->id;
                $product->save();
            }
        }
    });

    // Remove old category column
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('category');
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->string('category')->nullable();
    });

    // You'd need to reverse the data migration here if needed

    Schema::table('products', function (Blueprint $table) {
        $table->dropForeign(['category_id']);
        $table->dropColumn('category_id');
    });
}