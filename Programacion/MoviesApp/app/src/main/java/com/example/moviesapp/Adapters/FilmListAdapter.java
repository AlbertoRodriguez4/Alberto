package com.example.moviesapp.Adapters;

public class FilmListAdapter extends RecyclerView.Adapter<FilmListAdapter.ViewHolder> {
    ListFilm items;
    Context context;
    public FilmListAdapter(ListFilm items) {
        this.items = items;
    }
@NonNull;
@Override;
public FilmListAdapter.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
    context = parent.getContext();
    View inflate = LayoutInflater.from(parent.getContext()).inflate(R.layout.viewholder_film, parent, false);
    return new Viewholder(inflate);
}
@Override
public void onBindViewHolder(@NonNull FilmListAdapter.ViewHolder holder, int position) {
holder.titleText.setText(items.getData().get(position).getTitle());
RequestOptions requestOptions.transformP(new CenterCrop(), new RoundedCorners(30));
Glide.with(context)
    .load(items.getData().get(position).getPoster())
    .apply(requestOptions)
    .into(holder.pic)
    holder.itemView.setOnClickListener(new View.OnClickListener() {
        @Override
        public void onClick(View V) {
            
        }


    })
}
@public int getItemCount() {
return 0;
}
public class ViewHolder extends RecyclerView.ViewHolder {
TextView titleText;
ImageView pic;
public ViewHolder (@NonNull View intemView) {
    super(itemView);
    titleText = itemView.findViewById(R.id.titleText);
    pic = itemView.findViewById(R.id.pic);
}
}
}