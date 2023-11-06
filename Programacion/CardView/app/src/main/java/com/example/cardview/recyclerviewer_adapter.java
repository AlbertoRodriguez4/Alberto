package com.example.cardview;

import android.content.Context;
import android.content.Intent;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.RecyclerView;

import java.util.ArrayList;

public class recyclerviewer_adapter extends RecyclerView.Adapter<recyclerviewer_adapter.ViewHolder> {
    private ArrayList<recycleview_list> recycleview_lists;
    private Context context;

    public recyclerviewer_adapter(ArrayList<recycleview_list> recycleview_lists, Context context) {
        this.recycleview_lists = recycleview_lists;
        this.context = context;
    }

    @NonNull
    @Override
    public recyclerviewer_adapter.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).inflate(R.layout.recyclerview_card, parent, false);
        return new ViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull recyclerviewer_adapter.ViewHolder holder, int position) {
        holder.imageView.setImageResource(recycleview_lists.get(position).getImage());
        holder.textView.setText(recycleview_lists.get(position).getText());
        holder.cardView.setOnClickListener(e->{
            Intent intent = new Intent(context, pages.class);
            intent.putExtra("id", position);
            context.startActivity(intent);
        });
    }

    @Override
    public int getItemCount() {
        return recycleview_lists.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder {
        CardView cardView;
        ImageView imageView;
        TextView textView;

        public ViewHolder(@NonNull View itemView) {
            super(itemView);
            cardView = itemView.findViewById(R.id.cardView);
            imageView = itemView.findViewById(R.id.imageView2);
            textView = itemView.findViewById(R.id.textView);
        }
    }
}
