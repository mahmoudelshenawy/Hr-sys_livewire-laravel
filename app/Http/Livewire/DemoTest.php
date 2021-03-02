<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class DemoTest extends Component
{

    use WithFileUploads;
    public $selectedCategory = null;
    public $selectedSubCategory = null;
    public $subCategories = [];
    public $selectedTags;
    public $product;
    public $image;
    public $search = '';
    public $totalCost;
    protected $rules = [
        'product.name' => 'required',
        'product.desc' => 'nullable',
        'product.purchase_price' => 'required|numeric',
        'product.selling_price' => 'required|numeric',
        'product.stock' => 'required|numeric',
        'selectedCategory' => 'required|numeric',
        'selectedSubCategory' => 'required|numeric',
        'selectedTags' => 'required',
        'image' => 'required|file'
    ];

    public function mount()
    {
        $this->product = new Product();
    }
    public function updatedProductStock($v)
    {
        $this->totalCost = $this->product->purchase_price * $v;
    }
    public function save()
    {
        $this->validate();

        // image
        if ($this->image !== null) {
            $filename = $this->image->store('products', 'public');
            $url = Storage::url($filename);
            if ($this->product->image !== null) {
                Storage::delete($this->product->image);
            }
            $this->product->image = $filename;
            $this->product->image_path = $url;
        }
        if ($this->selectedCategory !== null) {
            $this->product->category_id = $this->selectedCategory;
        }
        if ($this->selectedSubCategory !== null) {
            $this->product->sub_category_id = $this->selectedSubCategory;
        }
        if (!empty($this->selectedTags)) {
            $this->product->save();
            $this->product->tags()->attach($this->selectedTags);
        }
    }
    public function updatedSelectedCategory($id)
    {
        $this->loadSubCategories();
    }
    public function loadSubCategories()
    {
        if ($this->selectedCategory) {
            $this->subCategories = Category::where('parent_id', '=', $this->selectedCategory)->get();
        } else {
            return [];
        }
    }

    public function render()
    {
        return view('livewire.demo-test', [
            'products' => Product::query()->search($this->search)->get(),
            'categories' => Category::where('parent_id', '=', null)->get(),
            'subCategories' => $this->loadSubCategories(),
            'tags' => Tag::all()
        ]);
    }
}
